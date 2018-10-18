<?php

function printStyles(){
  ob_start();
  ?>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <?php
  ob_end_flush();
}

function printScripts(){
  ob_start();
  ?>
  <script src="js/main.js"></script>
  <?php
  ob_end_flush();
}

function printNavigation(){
  ob_start();
  ?>
  <nav class="main-nav">
    <ul>
      <li><a href="index.php">Index</a></li>
      <li><a href="base64.php">Base 64</a></li>
      <li><a href="thumb.php">Thumbnails</a></li>
      <li><a href="dominant.php">Dominant Color</a></li>
    </ul>
  </nav>
  <?php
  ob_end_flush();
}