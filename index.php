<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Online Tutoring & Study Help - Montgomery Blair High School</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <!--
				<a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/">
                    <strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js
                </a>
                <span class="right">
                    <a href="http://tympanus.net/codrops/?p=11372">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
				-->
            </div><!--/ Codrops top bar -->
			
			<header>
			<div class="intro">
				<h1>Need <strong>study help?</strong></h1>
				<h2>Enter your student ID and password below to start chatting with Blair's student tutors!</h2>
			</div>
				<nav class="codrops-demos">
					<!--
					<a class="current-demo" href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					<a href="index4.html">Demo 4</a>
					<a href="index5.html">Demo 5</a>
					-->
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			<?php
				$errcode=htmlentities($_GET['error']);
				if($errcode==1){
					echo('
					<style type="text/css">
					alert {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 13px;
	/* for demo only */
	margin: 8px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  font-family: inherit;
  font-weight: bold;
  color: inherit;
  text-rendering: optimizelegibility;
}
h4 {
font-size: 14px;
}
h4, h5, h6 {
line-height: 18px;
}

p {
  margin: 0 0 9px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 18px;
}

.close {
  float: right;
  font-size: 20px;
  font-weight: bold;
  line-height: 18px;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover {
  color: #000000;
  text-decoration: none;
  opacity: 0.4;
  filter: alpha(opacity=40);
  cursor: pointer;
}

.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 18px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  color: #c09853;
  width:400px;
  margin-left:auto;
  margin-right:auto;
}
.alert-heading {
  color: inherit;
}
.alert .close {
  position: relative;
  top: -2px;
  right: -21px;
  line-height: 18px;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #468847;
}
.alert-danger,
.alert-error {
  background-color: #f2dede;
  border-color: #eed3d7;
  color: #b94a48;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #3a87ad;
}
.alert-block {
  padding-top: 14px;
  padding-bottom: 14px;
}
.alert-block > p,
.alert-block > ul {
  margin-bottom: 0;
}
.alert-block p + p {
  margin-top: 5px;
}
					</style>
<div class="alert alert-error">
  
  <strong>Hmm, </strong> that doesn\'t look like a valid id/password.  Try again?
</div>	
					');
				} 
			?>
			<div class="main-form">
			
				<img src="images/blazer.gif" width="90" style="position:relative; top:30px; left:-90px;"/>
				<form class="form-1" action="login.php" method="post">
					<p class="field">
						<input type="text" name="stuid" placeholder="Student ID #">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</div> <!--close main div-->
        </div>
    </body>
</html>