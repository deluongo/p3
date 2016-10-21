<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','P3')
    </title>

    <meta charset='utf-8'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

    <style>

        @import url(http://fonts.googleapis.com/css?family=Open+Sans);
        .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
        .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
        .btn-space { margin-top: 10px; padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
        .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
        .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
        .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
        .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
        .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
        .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
        .btn-block { width: 100%; display:block; }


        * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; }

        html { width: 100%; height:100%; overflow:hidden; }

        body {
          margin: 0;
        	width: 100%;
        	height:100%;
        	font-family: 'Open Sans', sans-serif;
        	background: #092756;
        	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
        	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
        	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
        	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
        	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
        	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }

        h1 { color: #fff; font-size: 22pt; text-shadow: 0 0 1px #BEC2C3; letter-spacing:1px; text-align:center; }


        input[type='text'] {
          width: 100%;
          	margin-bottom: 10px;
          	background: rgba(0,0,0,0.3);
          	border: none;
          	outline: none;
          	padding: 10px;
          	font-size: 13px;
          	color: #fff;
          	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
          	border: 1px solid rgba(0,0,0,0.3);
          	border-radius: 4px;
          	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
          	-webkit-transition: box-shadow .5s ease;
          	-moz-transition: box-shadow .5s ease;
          	-o-transition: box-shadow .5s ease;
          	-ms-transition: box-shadow .5s ease;
          	transition: box-shadow .5s ease;
          }
        input[type='text']:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

        /* Reset */

        .animate, .butn, .btn-border-o:before, .btn-border-o:after, .btn-border:before, .btn-border:after, .btn-border-rev-o:before, .btn-border-rev-o:after, .btn-border-rev:before, .btn-border-rev:after, .btn-fill-vert-o:before, .btn-fill-vert-o:after, .btn-fill-vert:before, .btn-fill-home:before, .btn-fill-vert:after, .btn-fill-home:after, .btn-fill-horz-o:before, .btn-fill-horz-o:after, .btn-fill-horz:before, .btn-fill-horz:after {
          -webkit-transition: all 0.3s;
          transition: all 0.3s;
        }

        .butn {
          display: inline-block;
          line-height: 35px;
          margin: 8px;
          padding: 0 15px;
          font-size: 15px;
          position: relative;
          opacity: .999;
          border-radius: 3px;
        }

        .btn-fill-home {
          background-color: #4a77d4;
          border: 1px solid #4a77d4;
          color: #fff;
          overflow: hidden;
        }

        .btn-fill-vert {
          background-color: #e5e5e5;
          border: 1px solid #e5e5e5;
          color: black;
          overflow: hidden;
        }

        .btn-fill-home:before, .btn-fill-home:after {
          content: '';
          width: 100%;
          height: 0;
          opacity: 0;
          position: absolute;
          left: 0;
          z-index: -1;
        }

        .btn-fill-vert:before, .btn-fill-vert:after {
          content: '';
          width: 100%;
          height: 0;
          opacity: 0;
          position: absolute;
          left: 0;
          z-index: -1;
        }

        .btn-fill-vert:before {
          top: 50%;
        }
        .btn-fill-vert:after {
          bottom: 50%;
        }

        .btn-fill-home:before {
          top: 50%;
        }
        .btn-fill-home:after {
          bottom: 50%;
        }

        .btn-fill-vert:hover {
          color: #fff;
        }
        .btn-fill-vert:hover:before, .btn-fill-vert:hover:after {
          height: 50%;
          opacity: 1;
        }

        .btn-fill-home:hover {
          color: #fff;
        }
        .btn-fill-home:hover:before, .btn-fill-home:hover:after {
          height: 50%;
          opacity: 1;
        }

        .btn-fill-home.btn-green:before, .btn-fill-home.btn-green:after {
          background-color: #3f51b5;
        }
        .btn-fill-home.btn-green:hover {
          border-color: #3f51b5;

        }
        .btn-fill-vert.btn-blue:before, .btn-fill-vert.btn-blue:after {
          background-color: #3fb0ac;
        }
        .btn-fill-vert.btn-blue:hover {
          border-color: #3fb0ac;
        }

        .btn-fill-vert.btn-purple:before, .btn-fill-vert.btn-purple:after {
          background-color: #9b59b6;
        }
        .btn-fill-vert.btn-purple:hover {
          border-color: #9b59b6;
        }
        .btn-fill-vert.btn-navy:before, .btn-fill-vert.btn-navy:after {
          background-color: #34495e;
        }
        .btn-fill-vert.btn-navy:hover {
          border-color: #34495e;
        }
        .btn-fill-vert.btn-orange:before, .btn-fill-vert.btn-orange:after {
          background-color: #e67e22;
        }
        .btn-fill-vert.btn-orange:hover {
          border-color: #e67e22;
        }
        .btn-fill-vert.btn-red:before, .btn-fill-vert.btn-red:after {
          background-color: #e74c3c;
        }
        .btn-fill-vert.btn-red:hover {
          border-color: #e74c3c;
        }
        .scroll_wrapper {
          overflow: scroll;
          height: 100%;
        }
        /* menu base styles */

        nav{
          background: #c9c9c9;
          padding: 8px;
          box-shadow: 0 0 15px 2px rgba(0,0,0,0.5);
        }

        nav ul{
          list-style-type: none;
          -webkit-padding-start: 0px;
          -webkit-margin-before: 0em;
          -webkit-margin-after: 0em;

        }

        nav li{
          margin: -5px;
          text-decoration: none;
          text-align: center;
          color: #fff;
          display: block;
        }

        a {
          padding: 0;
        }

        fieldset {
          margin: 10px;
          border: 2pt solid #BEC2C3;
          border-color: #BEC2C3;
          color: #BEC2C3;
        }

        legend {
          padding: .2em .5em;
          border: 2pt solid #BEC2C3;
          font-size: 14pt;
        }

        label {
          color: #fff;
          font-size: 10pt;
        }

        h2 {
          color: #fff;
          font-size: 10pt;
        }

        p {
          color: #fff;
          font-size: 10pt;
        }

      @media screen and (min-width: 420px){

        nav {
          padding: 1px;

        }
        nav ul{
          padding: 0;
          margin: 0;
          display: flex;
        }

        nav li{
          margin: 1px;
          flex: 1 1 0;
        }

        nav{
          display: flex;
          justify-content: space-between;
        }

        nav button{
          justify-content: center;
        }

        /* Main Styles */
        .flex-container {
          display: flex;
        }

        .flex-item {
          /* Width = Height when flex-flow: column;*/
          height: 100px;
          /*Combines flex-grow, flex-shrink, and flex-basis
          in that order*/
          flex: 1 0 200px;
          /*Flex-basis prevents scrolling*/
          flex-basis: 200px;
        }

        .one {
          flex-grow: 1;

        }

        .two {
          flex-grow: 4;

        }

      } /* end media 500 */
    </style>

</head>
<body>

  <section>
    <nav>
      <ul>
        <li><a href="/"><button class="butn btn-green btn-fill-home">Home</button></a></li>
        <li><a href="/ipsums"><button class="butn btn-blue btn-fill-vert">Ipsum</button></a></li>
        <li><a href="/users"><button class="butn btn-blue btn-fill-vert">Users</button></a></li>
        <li><a href="/passwords"><button class="butn btn-blue btn-fill-vert">Passwords</button></a></li>
      </ul>
    </nav>
  </section>
  <div class="scroll_wrapper">
    <section>
      {{-- Main page content will be yielded here --}}
      @yield('content')
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
  </div>

</body>
</html>
