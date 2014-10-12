<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vote Kineo</title>
  <meta name="description" content="A mini web app to provide a poll of voting intention for an upcoming (Presidential) election.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
  <link href="<?php echo URL; ?>public/css/parsley.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- Parsley js form validation -->
  <script src="<?php echo URL; ?>public/js/parsley.js"></script>
  <!-- App JavaScript -->
  <script src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>
<!-- header -->
<div class="container header">
  <div>
    <img src="<?php echo URL; ?>public/img/cgkineoLogo.png" />
  </div>
  <!-- navigation -->
  <div id="menu" class="navigation">
    <ul>
      <li><a href="<?php echo URL; ?>">Vote</a></li>
      <li><a href="<?php echo URL; ?>home/result">View results</a></li>
    </ul>
  </div>
</div>