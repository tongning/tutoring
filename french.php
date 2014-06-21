<?php
session_start();
if($_SESSION['logged_in']==1){
	?>
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
		<style type="text/css">
		.main-form a:link {
			color:#FFF;
		}
		</style>
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
				<?php
				include_once('header.php');
				?>
            </div><!--/ Codrops top bar -->
			
			<header>
			<div class="intro">
				<h1>French</h1>
				<h2>Enter your question below.  <a href="subjects.php" style="color: #FFF; text-decoration:underline;">Back to subjects</a>&nbsp;&nbsp;<a href="logout.php" style="color: #FFF; text-decoration:underline;">Log out (<?php echo $_SESSION['fname'];?>)</a></h2>
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
			
			<div class="main-form">
			
				<!-- Place this tag where you want the Live Helper Plugin to render. -->
				<div id="lhc_status_container_page" style="label {color:#FFF;}" ></div>
				<!-- Place this tag after the Live Helper Plugin tag. -->
<script type="text/javascript">
var LHCChatOptionsPage = {};
LHCChatOptionsPage.opt = {};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//tutors.mbhs.edu/lhc/index.php/chat/getstatusembed/(department)/3';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
			</div> <!--close main div-->
        </div>
    </body>
</html>

<?
}
else{
	header('Location: index.php?error=3196');
}
?>