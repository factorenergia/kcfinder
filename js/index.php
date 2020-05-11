<?php

/** This file is part of KCFinder project
  *
  *      @desc Join all JavaScript files from current directory
  *   @package KCFinder
  *   @version 3.12

*/

namespace kcfinder;

chdir("..");
require "core/autoload.php";
$min = new minifier("js");
$min->minify("cache/base.js");
