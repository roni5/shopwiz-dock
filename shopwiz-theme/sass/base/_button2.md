//@import "compass/css3/transform-legacy";
@import "compass/css3/transition";
@import "compass/css3/transform";
.button {
	display: inline-block;
	outline: none;
	border-radius:0.9em;
	cursor: pointer;
	text-decoration: none;
	font: bold 14px/100% "Noto Sans", Arial, Helvetica, sans-serif;
	overflow: hidden;
	padding: .4em 1em .5em 1em;
	margin: 10px 0;
	background: #3b88d8;
	background: -moz-linear-gradient(0% 100% 90deg, #377ad0, #52a8e8);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#52a8e8), to(#377ad0));
	border-top: 1px solid #4081af;
	border-right: 1px solid #2e69a3;
	border-bottom: 1px solid #20559a;
	border-left: 1px solid #2e69a3;
	-moz-box-shadow: inset 0 1px 0 0 #72b9eb, 0 1px 2px 0 #b3b3b3;
	-webkit-box-shadow: inset 0 1px 0 0 #72b9eb, 0 1px 2px 0 #b3b3b3;
	//box-shadow: inset 0 1px 0 0 #72b9eb, 0 1px 2px 0 #b3b3b3;
	 box-shadow: inset 1px 1px 2px 0 rgba(255,255,255,0.6), 
  inset -1px -1px 1px 0 rgba(100,120,140,0.6),
   1px 2px 4px 0 rgba(0,0,0,0.6);
	color: #fff;
  text-shadow: 2px 2px 3px rgba(255,255,255,0.1);
	-webkit-background-clip: padding-box;
}
 
.button:hover {
	background: #2a81d7;
	background: -moz-linear-gradient(0% 100% 90deg, #206bcb, #3e9ee5);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#3e9ee5), to(#206bcb));
	border-top: 1px solid #2a73a6;
	border-right: 1px solid #165899;
	border-bottom: 1px solid #07428f;
	border-left: 1px solid #165899;
	-moz-box-shadow: inset 0 1px 0 0 #62b1e9;
	-webkit-box-shadow: inset 0 1px 0 0 #62b1e9;
	cursor: pointer;
	text-shadow: 0 -1px 1px #1d62ab;
	-webkit-background-clip: padding-box;
     //  @include transition(opacity 800ms ease-in 100ms);
        // @include transform(scale(0.99));
	  //@include transform(rotate(0.00004deg));
        transition: all 0.3s linear;
}
 
.button:active {
	background: #3282d3;
	border: 1px solid #154c8c;
	border-bottom: 1px solid #0e408e;
	-moz-box-shadow: inset 0 0 6px 3px #1657b5, 0 1px 0 0 #fff;
	-webkit-box-shadow: inset 0 0 6px 3px #1657b5, 0 1px 0 0 #fff;
	text-shadow: 0 -1px 1px #2361a4;
	-webkit-background-clip: padding-box;
}
 
.button:after {
       // content: url(images/white-rt-triangle.png);
        width: 8px;
        height: 10px;
        float: right;
        margin: 1px 0 0 10px;
}

