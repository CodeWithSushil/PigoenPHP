<?php
define("APP_ROOT", __DIR__);
<<<<<<< HEAD
$t = require_once APP_ROOT."/vendor/autoload.php";
echo "<pre>";
Print_r($t);
=======

//require_once APP_ROOT."/vendor/autoload.php";
require_once "./app/Pigoen.php";

if($_SERVER['REQUEST_URI'] == "/" && $_SERVER['REQUEST_METHOD'] == "GET"){
  $user = new PigoenPHP();
  $user->setMessage("This is Text Message.");
} elseif($_SERVER['REQUEST_URI'] == "/home" && $_SERVER['REQUEST_METHOD'] == "GET"){
  require_once "./public/home.php";
} else {
  echo "404 - Page not Found.";
}

?>

<link rel="stylesheet" href="https://www.jsdelivr.com/package/npm/bulma">
>>>>>>> 1fcd787 (updates)
