<?php

/** This file is part of KCFinder project
  *
  *   @desc Join all CSS files from current directory
  *   @package KCFinder
  *   @version 3.12
  */

namespace kcfinder;

chdir("..");
require "core/autoload.php";
$min = new minifier("css");
$min->minify("cache/base.css");
