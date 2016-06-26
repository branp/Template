<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/materialize.css" />
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
    </style>

</head>
    
<body>


<div id="">
	<h1>Welcome to CodeIgniter!</h1>
	
</div>

<!-- Dropdown Trigger -->
  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>



 </script> 
</body>
</html>

<script type="text/javascript" src="<?=base_url()?>js/materialize.js"> </script>

 <script type="text/javascript">

  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );