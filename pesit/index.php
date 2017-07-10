<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="ico" href="http://pesitsouth.pes.edu/wp-content/uploads/2016/05/favicon.ico">
		<title>PESIT South</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/material-icons.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <!--   Import style.css  -->
		    <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
        <!--Start with header-->
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo" style="margin-left: 20px;"><img class="img_i" src="http://pesitsouth.pes.edu/wp-content/uploads/2016/05/logo.png" alt="PESIT South Campus" style="vertical-align: middle;"></a>
          <ul class="right hide-on-med-and-down">
              <li><a href=index.php>Home</a></li>
              <li><a href="page4.html">Seating Arrangement</a></li>
              <li><a href="page3.html">About</a></li>
              <li><a href="#!">Contact</a></li>
          </ul>
          <ul id="slide-out" class="side-nav">
              <li><a href="#!">Home</a></li>
              <li><a href="#!">About</a></li>
              <li><a href="#!">Contact</a></li>
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse">
            <i class="mdi-navigation-menu" style="color:#262626;"></i>
          </a>
        </div>
      </nav>       
  		<!--///////////////////////////// Slider ///////////////////////////-->
      <div class="slider">
          <ul class="slides">
            <li>
              <img src="http://pesitsouth.pes.edu/wp-content/uploads/2016/05/pesitsc-header_0.jpg">
              <div class="caption center-align">
                <h3>PESIT South Campus!</h3>
                <h5 class="light grey-text text-lighten-3">Bangalore.</h5>
              </div>
            </li>
            <li>
              <img src="http://pesitsouth.pes.edu/wp-content/uploads/2016/05/pesitsc-slider-2.jpg">
              <div class="caption left-align">
                <h3>PESIT Events</h3>
                <h5 class="light grey-text text-lighten-3">MAYA.</h5>
              </div>
            </li>
            <li>
              <img src="http://pesitsouth.pes.edu/wp-content/uploads/2016/05/pesitsc-slider-1.jpg"> 
              <div class="caption right-align">
                <h3>Campus Life</h3>
                <h5 class="light grey-text text-lighten-3">Knowledge Center.</h5>
              </div>
            </li>
            <li>
              <img src="http://pes.edu/wp-content/uploads/2015/10/pisatslider.jpg">
              <div class="caption right-align">
                <h3>PISAT Nanosatellite!</h3>
                <h5 class="light grey-text text-lighten-3">Ready for Launch.</h5>
              </div>
            </li>
          </ul>
      </div>
  		<!--/////////////////////////////   LOGIN   ////////////////////////////////-->
  		<div class="row row1" id="signin">
    		<form class="col s12 form_f" action="login.php" method="get">
          <fieldset style="height: 330px; border-radius: 5px;" class="field_f">
          <div class="row row_r">
            <div class="row">
        		  <div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="icon_prefix" type="text" class="validate" name="username">
          			<label for="icon_prefix">Email</label>
        		  </div>
            </div>
        		<div class="row">
        			<div class="input-field col s12">
        		  		<input id="password" type="password" class="validate" name="pass">
        		  		<label for="password">Password</label>
       			 	</div>
      			</div>
      			<center>
      				<button class="btn waves-effect waves-light" type="submit" name="action" style="width: 250px;
      				height: 50px;">
      					LOGIN<i class="material-icons right">send</i>
  					  </button>
  				  </center>
  				  <center>
  					 <a class="waves-effect waves-light btn" style="margin-top: 10px; width: 250px; height: 50px; padding-top: 8px;" onclick="showform1()">Sign Up</a>
  				  </center>
  			  </div>
          </fieldset>
    	  </form>
  	  </div>
  		<!--/////////////////////////////  Sigh Up  ///////////////////////////////-->
  		<div class="row row2" id="signup" style="display: none">
    		<form class="col s12" style="display: block;" action="signup.php" method="post">
        <fieldset style="height: 590px; border-radius: 5px;">
      		<div class="row">
        		<div class="input-field col s6">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="icon_prefix" type="text" class="validate" name="f_name">
          			<label for="icon_prefix">First Name</label>
        		</div>
        		<div class="input-field col s6">
          			<input id="last_name" type="text" class="validate" name="l_name">
          			<label for="last_name">Last Name</label>
        		</div>
       			<div class="input-field col s6" style="width: 500px;">
          			<i class="material-icons prefix">phone</i>
          			<input id="icon_telephone" type="text" class="validate" name="telephone"> 
          			<label for="icon_telephone">Telephone</label>
        		</div>
        		<div class="row">
        			<div class="input-field col s12">
        		  		<input id="password" type="password" class="validate" name="password">
        		  		<label for="password">Password</label>
       			 	</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s12">
        		  		<input id="password" type="password" class="validate" name="confpass">
        		  		<label for="password">Confirm Password</label>
       			 	</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s12">
        				<input id="email" type="email" class="validate" name="email">
        				<label for="email">Email</label>
        			</div>
      			</div>
      			<center>
      			   <button class="btn waves-effect waves-light" type="submit" name="action" value="submit" style="width: 250px; height: 50px;">Submit<i class="material-icons right">send</i>
  				    </button>
  				  </center>
          </div>
          </fieldset>
    		</form>
  		</div>
  		<!--////////////////////////  Footer  ////////////////////////////////-->
      <footer class="page-footer" style="background-color: #176763;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12" >
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Hi Hello</p>
              </div>
              <div class="col l6 s12" style="width: 250px; margin: 10px 30px 10px 30px;">
              <fieldset>
                <h5 class="white-text">GET IN TOUCH</h5>
                <p class="grey-text text-lighten-4">Hosur Road, Electronic City<br>Bangalore-560100<br>080-66186610 / 11<br>admissions@pes.edu</p>
              </fieldset>
              </div>
            </div>
          </div>
          <div class="footer-copyright" style="background-color: rgba(55,55,55,0.40)">
            <div class="container">
            © 2016
            <a class="grey-text text-lighten-4 right" href="#!">Links</a>
            </div>
          </div>
      </footer>
  		<!--////////////////////////  Script  ////////////////////////////////-->
  		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script src="js/Script.js"></script>
  	</body>