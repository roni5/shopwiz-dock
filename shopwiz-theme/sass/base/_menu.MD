 /*.menu-toggle {
    display: none !important; }
 */
/*.selectnav {
    display: none;
}*/

  #rm-no-id,.responsive-menus-simple contextual-links-region panel-pane pane-block pane-system-main-menu {
     max-width:100%;
     max-height:100%;
     #position: relative;
     //box-shadow:0.7px 0.7px #420058,0 0 1px #550071;
     display: inline-block;
     text-decoration: none;
     margin:0em;
    // word-wrap: break-word;
   }
.menu {
    background:$logo-straw;  
    border:none;
    word-wrap: normal;
    display: block !important;
    text-decoration: none;
    padding-left:0%;
    float:left;
     z-index: 190;
    text-decoration: none;
    text-transform: uppercase;
    position: relative;
    max-width:100%;
    max-height:100%;
    border-right: 0.9px solid rgba(255,255,255,0.1);
    
}
 .pane-system-main-menu  {
      background-clip: border-box;
       border:none;
      display: block;
      background:$logo-straw;
      //box-sizing:border-box;
     max-width:100%;
     max-height:100%;
     position: relative;
     text-decoration: none;
     left: inherit;
      position:relative;
      z-index:3;
      text-align: left;
      font-size: 1.4rem;
      text-transform: uppercase;
      text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;
      margin:0.2em;
      margin-left:0.1em;
      font-weight: bold;
      postion:relative;
      transition: all 0.3s linear;
}
  .pane-system-main-menu , .menu  li a.active {
    list-style:none;
    border:none;
    color: #FFF;
    z-index: 190; 
    text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;
    text-decoration: none;
    box-sizing: border-box;
    font-weight: bold; 
    border-top: 0.7px solid rgba(255,255,255,0.1);
    //border:1px solid #ffffff;//#7D9FC4  #ffffff  #5586ee
    transition: all 0.3s linear;
   // margin-left:0.1em;
     //margin-right:0.2em;
  }
 .pane-system-main-menu , .menu ul a {
     text-decoration: none;
      border:none;
      background:$light-straw;
    //background-color: #fefefe;
   text-shadow: -1px -1px 0.4px #fefefe, 0.5px 0px 0.5px #420058;
    padding: 0 auto;
    margin-left: -0.8em;
    //margin: 0 6px 0 auto;
  max-width:100%;
    max-height: 100%;
    z-index: 190;
     border:none !important;
    position:relative;
    list-style:none;
    list-style: square outside none;
    list-style-image:none;
     transition: all 0.3s linear;
    transition-timing-function: ease-in-out;
    vertical-align: baseline;
}
 .pane-system-main-menu, .menu li a  .active-trail active{
   text-decoration: none;
   list-style:none;
   border:none !important;
   text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;
   transition: all 0.3s linear;
   transition-timing-function: ease-in-out;
   vertical-align: baseline;
  }
 .pane-system-main-menu, .menu li {
    float:left;
    font-size: 1.4rem;
    text-decoration: none;
    border:none;
    //text-shadow: -0.4px -0.3px 0.3px #fefefe, 1px 1px 1px #212121;
    display: inline-block;
     list-style:none;
    list-style-image:none;
    max-width:100%;
    max-height: 100%;
    #postion:relative;
    margin-left:0.2em;
    border-top:  0.5px solid rgba(255,255,255,0.1);
    transition: all 0.3s linear;
    transition-timing-function: ease-in-out;
    vertical-align: baseline;

}

  Inline style {
    padding-left: 12px;
}
 .pane-system-main-menu, .menu li:first-child a {
    text-decoration: none;
     border:none;
   text-shadow: -1px -1px 0.4px  #fefefe, 0.5px 0.5px 0.7px #420058; 
    margin-right:0.03em;
}
 .pane-system-main-menu , .menu li.active-trail {
     text-decoration: none;
     vertical-align:middle;
     border-top: .5px solid rgba(255,255,255,0.1); 
     text-shadow: -0.3px -1px 0.4px  #fefefe, 0.5px 0.5px 0.7px #420058;
     transition: all 0.3s linear;
  }
 .pane-system-main-menu ,.menu li.active-trail a {
    font-weight: normal;
     border:none;
    border-top: 0.8px solid rgba(255,255,255,0.1);
    text-decoration: none;
     text-shadow: -0.4px -0.5px 0.5px #fefefe, 1px 1px 1px #212121;     
     transition: all 0.3s linear;
       transition-timing-function: ease-in-out;
    vertical-align: baseline;

}
 .pane-system-main-menu, .menu li a {
    display: block;
    cursor: pointer;
    border:none;
     text-decoration: none;
   text-shadow: -1px -1px 0.4px #fefefe, 0.5px 0.5px 0.6px #420058; 
    border-top: 0.8px solid rgba(255,255,255,0.1);
   letter-spacing: 0.025px;
    color: $logo-straw;
    height: 1.78em;
    font-size: 1.5rem;
    line-height: 1.268em;
    padding: 0 auto;
    margin: 0 auto;
}
  .pane-system-main-menu  ,.menu li a:hover {
     background:$light-straw;
     border:none;
     font-weight: normal !important;
     text-decoration: none;
    color: $tint;
    border-top: .8px solid rgba(255,255,255,0.1);
    text-shadow: 0.4px 0px 0.3px rgba(0, 0, 0, 0.3);
    transition: all 0.3s linear;
}
  .pane-system-main-menu , .menu li a:hover a {
     color: $light-straw;
      border:none;
     text-decoration: none;
    font-weight: normal;
    text-shadow: 0.5px 0px 0px rgba(0, 0, 0, 0.3);
     transition: all 0.3s linear;
  }
   .pane-system-main-menu , .menu li ul {
    display: none;
    border:none;
    text-decoration: none;
    margin: 0px;
    //background:#ed008c ;
    padding: 0 auto;
    //padding-right:2px;
    overflow: hidden;
    -webkit-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
    //border: 1px solid transparent;
    border:none;
    behavior: url(/profiles/commerce_kickstart/themes/contrib/webital/PIE.htc);
}
  .pane-system-main-menu  ,.menu li ul li {
     -webkit-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
     padding: 0 auto;
       padding-left:1px;
      //padding-right:2px;
     border:none;
    text-decoration: none;
     text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;
    border:none;
    margin: 0.2em;
    background: #ed008c;
    height:1.75em ;
    text-align: left;
    display: block;
    float: none !important;
   }
  .pane-system-main-menu , .menu li ul li:hover {
     background:$light-straw;
     text-decoration: none;
      border:none;
      font-weight:normal;
      transition: all 0.3s linear;
   }
   .pane-system-main-menu , .menu li ul li:first-child {
    padding-left: 0px;
    text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;
    text-decoration: none;
  }
  .pane-system-main-menu , .menu li ul li:first-child a {
    border-left: none;
     text-decoration: none;
  }
  .pane-system-main-menu , .menu li ul li:last-child {
    text-decoration: none;
    border: none;
    text-align: left;
    text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;    
  }
  .pane-system-main-menu , .menu li ul li a {
     text-decoration: none;
    padding: 0 auto;
    margin: 0 auto;
 //padding-right:2px;
    //background: #ed008c !important;
    font-size: 1.5rem;
    //color: #550071;
    border: none;
    height: auto;
    width: auto;
}
.pane-system-main-menu , .menu li ul li a:hover {
    color: $light-straw;
    font-weight:normal !important;
    background: $tint;
     text-decoration: none;
     transition: all 0.3s linear;
      transition-timing-function: ease-in-out;
    vertical-align: baseline;

}
.pane-system-main-menu, .menu ul {
    position: absolute;
    font-weight:normal;
    z-index: 90;
     text-shadow:  -0.4px -0.3px 0.4px #fefefe, 0.3px -1.0px 0.5px #420058 ;
}
.pane-system-main-menu , .menu li:last-child a {
     text-decoration: none;
     margin-right:0 auto;
}
.pane-system-main-menu , .menu li ul li:last-child {
    text-decoration: none;
    padding-right: 1px;
}
.pane-system-main-menu , menu li ul li:last-child a {
    text-decoration: none;
    border-right: none;
    //padding-right:2px;
}
.pane-system-main-menu , .menu li.expanded a {
    margin-bottom:0.3em;
}

