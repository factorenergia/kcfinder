<?php

/** This file is part of KCFinder project
  *
  *   @desc Browser calling script
  *   @package KCFinder
  *   @version 3.12
  */

require "core/bootstrap.php";
$browser = "kcfinder\\browser"; // To execute core/bootstrap.php on older
$browser = new $browser();      // PHP versions (even PHP 4)
$browser->action();
