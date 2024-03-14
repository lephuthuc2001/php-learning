<?php 

require "./functions.php";

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if($uri === "/about"){
  require "./controllers/about.php";
}

if($uri ==="/"){
  require "./controllers/index.php";
}
