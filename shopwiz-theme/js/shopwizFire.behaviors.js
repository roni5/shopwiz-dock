
 (function ($) {
      Drupal.behaviors.shopwizFire = {
        attach: function (context, settings) {
          // Your JS code goes here.


     // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCd1IzEUTlUgruYHH5R3wYmARRUtGoIyyo",
    authDomain: "shopwiz-4bf85.firebaseapp.com",
    databaseURL: "https://shopwiz-4bf85.firebaseio.com",
    storageBucket: "shopwiz-4bf85.appspot.com",
    messagingSenderId: "472335838041"
  };
  firebase.initializeApp(config);



        }
      }
    })(jQuery);
