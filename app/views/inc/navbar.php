<!DOCTYPE html>
<html>
<head>
	<title>Exercise</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&amp;family=Open+Sans:wght@500&amp;family=Oswald&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href= <?php echo URL."public\css\style.css" ?> >
</head>
<body>
<header>
 <nav  class="navbar  ">
   <div id="navbarWrap" class="container-fluid ">
    <ul  class="nav navbar-nav ">
      <li><a class="PhotoStock"   href="#">PhotoStock</a></li>
      <li><a href="<?php echo URL ?>">HOME</a></li>
      <li><a href="<?php echo URL.'about' ?>">ABOUT</a></li>
      <li><a href="<?php echo URL.'terms' ?>">TERMS</a></li>
      <li><a href="<?php echo URL.'getstarted' ?>">GET STARTED</a></li>
      <li><a href="<?php echo URL.'contact' ?>">CONTACT</a></li>
    </ul>
      <a href="<?php echo URL.'register' ?>"> <button id="signUp" class="btn btn-primary pull-right btn-login "  role="button"> Sign Up </button></a>
    <a href="<?php echo URL.'login' ?>"><button id="signIn" class="btn btn-primary pull-right btn-login "  role="button"> SIGN IN </button></a>
  </div>
</nav>

