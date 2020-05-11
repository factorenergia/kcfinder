<?php

/** This file is part of KCFinder project
  *
  *   @desc Upload calling script
  *   @package KCFinder
  *   @version 3.12
  */

require "core/bootstrap.php";
$uploader = "kcfinder\\uploader";  // To execute core/bootstrap.php on older
$uploader = new $uploader();       // PHP versions (even PHP 4)
$uploader->upload();
