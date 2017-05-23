<?php

/**
 * @file
 * Contains the test class for Commerce checkout login module tests.
 */

/**
 * Class for commerce checkout login testing.
 */
abstract class CommerceCheckoutLoginTestBase extends CommerceBaseTestCase {

  protected $currentOrder;
  protected $lastInsertedUserId;
  protected $siteAdministratorAccount;
  protected $storeAdministratorAccount;
  protected $storeCustomerAccount;
  protected $testProduct;
  protected $testProductNode;

  /**
   * Implementation of setUp().
   */
  function setUp() {
    $modules = parent::setUpHelper('all', array('commerce_checkout_login'));
    parent::setUp($modules);

    // User creation for different operations.
    $this->siteAdministratorAccount = $this->createSiteAdmin();
    $this->storeAdministratorAccount = $this->createStoreAdmin();
    $this->storeCustomerAccount = $this->createStoreCustomer();

    // The rule that sends a mail after checkout completion should be disabled
    // as it returns an error caused by how mail messages are stored.
    $this->disableRule('commerce_checkout_order_email');
  }

  /**
   * Helper function to prepare an anonymous enviroment, it sets the user,
   *  products and prepares a cart.
   */
  protected function prepareAnonymousEnvironment() {
    // Login as admin user to grant permissions.
    $this->drupalLogin($this->siteAdministratorAccount);
    $this->enablePermissionForRoles('access checkout', [
      DRUPAL_ANONYMOUS_RID,
      DRUPAL_AUTHENTICATED_RID
    ]);

    $this->createDummyProductDisplayContentType();
    $this->testProduct = $this->createDummyProduct();
    $this->testProductNode = $this->createDummyProductNode(array($this->testProduct->product_id), $this->randomName());

    $this->ensureUserIsAnonymous();

    // Submit the add to cart form.
    $this->drupalPost('node/' . $this->testProductNode->nid, array(), t('Add to cart'));
    $this->setCurrentOrder();

    $this->lastInsertedUserId = $this->getLastAddedUserId();
  }

  /**
   * @param $permission
   * @param $role_ids
   */
  protected function enablePermissionForRoles($permission, array $role_ids) {
    foreach ($role_ids as $rid) {
      user_role_grant_permissions($rid, array($permission));
    }
  }

  protected function ensureUserIsAnonymous() {
    global $user;
    $this->drupalLogout();
    $user = user_load(0);
  }

  protected function setCurrentOrder() {
    $orders = commerce_order_load_multiple(array(), array(
      'uid' => 0,
      'status' => 'cart'
    ), TRUE);
    $this->currentOrder = reset($orders);

    entity_get_controller('commerce_order')->resetCache();
  }

  /**
   * @return mixed
   */
  protected function getLastAddedUserId() {
    return db_select('users')
      ->fields('users', array())
      ->orderBy('uid', 'DESC')
      ->range(0, 1)
      ->execute()
      ->fetchCol();
  }

  /**
   * Disables the account creation rule provided by commerce.
   *
   * This can be used to be able to ensure that commerce checkout login does not
   * Create a new user account.
   * @param $rule_id
   */
  protected function disableRule($rule_id) {
    $rules_config = rules_config_load($rule_id);
    $rules_config->active = FALSE;
    $rules_config->save();
  }

  /**
   * Generates some default form values for the checkout step.
   * @return array
   */
  protected function generateAddressFormValues() {
    $values = array(
      'customer_profile_billing[commerce_customer_address][und][0][name_line]' => $this->randomName(),
      'customer_profile_billing[commerce_customer_address][und][0][thoroughfare]' => $this->randomName(),
      'customer_profile_billing[commerce_customer_address][und][0][premise]' => $this->randomName(),
      'customer_profile_billing[commerce_customer_address][und][0][locality]' => $this->randomName(),
    );

    return $values;
  }

  /**
   * @return bool
   */
  protected function userIsLoggedIn() {
    $links = $this->xpath('//a[normalize-space(text())=:label]', array(':label' => t('Log out')));
    return !empty($links);
  }

  /**
   * @param string $username
   */
  protected function assertUsernameIsDisplayed($username) {
    $this->assertText(t('Username'), 'Account information shows show the username label');
    $this->assertText($username, 'Account information shows the username');
  }

  protected function noUsernameInformationDisplayed() {
    $this->assertText(t('Username'), 'Account information does not show the username label');
  }

  /**
   * @param string $email
   */
  protected function assertEmailAddressIsDisplayed($email) {
    $this->assertText(t('E-mail address'), 'Account information shows the e-mail address label');
    $this->assertText($email, 'Account information shows the e-mail address');
  }

  protected function assertNoNewAccountCreated() {
    $this->assertEqual($this->lastInsertedUserId, $this->getLastAddedUserId(), 'No new account created');
  }

  protected function assertCheckoutWasCompletedWithoutCreatingNewAccount() {
    $this->assertText(t('Checkout complete'));
    $this->assertNoNewAccountCreated();
  }

  protected function startCheckoutProcess() {
    $this->prepareAnonymousEnvironment();
    $this->drupalPost('cart', array(), t('Checkout'));
  }

  /**
   * @param $account
   */
  protected function assertAccountInformationIsDisplayedWithLabel($account) {
    $this->assertText(t('Account information'), 'Account information is displayed.');
    $this->assertAccountInformationIsDisplayed($account);
  }

  /**
   * @param $account
   */
  protected function assertAccountInformationIsDisplayed($account) {
    $this->assertEmailAddressIsDisplayed($account->mail);
    $this->assertUsernameIsDisplayed($account->name);
  }

  protected function assertInvalidEmailMessageDisplayed($mail) {
    $this->assertRaw(t('The e-mail address %mail is not valid.', array('%mail' => $mail)));
  }

  /**
   * @param $form_values
   */
  protected function postContinue($form_values = array()) {
    $this->drupalPost(NULL, $form_values, t('Continue to next step'));
  }

  protected function enableAccountInformationPane() {
    variable_set('commerce_order_account_pane_auth_display', TRUE);
  }

  protected function disableAccountInformationPane() {
    variable_set('commerce_order_account_pane_auth_display', FALSE);
  }

  protected function assertNoAccountInformationDisplayed() {
    $this->assertNoText(t('Account information'), 'Account information is not displayed.');
  }

  protected function continueToReview($account) {
    $this->postContinue($this->generateAddressFormValues());
    $this->assertAccountInformationIsDisplayed($account);
  }

  protected function CompleteCheckout() {
    $this->postContinue();
  }

}
