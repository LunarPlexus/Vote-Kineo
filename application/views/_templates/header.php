<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vote Kineo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/parsley.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Parsley js form validation -->
    <script src="<?php echo URL; ?>public/js/parsley.js"></script>
    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>
<!-- header -->
<div class="container header">
    <!-- Info -->
<!--
    <div class="where-are-we-box">
        Everything in this box is loaded from <span class="bold">application/views/_templates/header.php</span> !
        <br />
        The green line is added via JavaScript (to show how to integrate JavaScript).
    </div>
    <h1>The header (used on all pages)</h1>
    <h3>Demo image, to show usage of public/img folder</h3>
-->
    <div>
        <img src="<?php echo URL; ?>public/img/cgkineoLogo.png" />
    </div>
    <!-- navigation -->
<!--     <h3>Demo Navigation</h3> -->
    <div id="menu" class="navigation">
        <ul>
            <li><a href="<?php echo URL; ?>">Home</a></li>
            <li><a href="<?php echo URL; ?>home/result">View results</a></li>
        </ul>
    </div>
    <!-- simple div for javascript output, just to show how to integrate js into this MVC construct -->
<!--
    <h3>Demo JavaScript</h3>
    <div id="javascript-header-demo-box">
    </div>
-->
</div>
