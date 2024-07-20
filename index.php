<?php
define("APP_ROOT", __DIR__);
<<<<<<< HEAD
<<<<<<< HEAD
$t = require_once APP_ROOT."/vendor/autoload.php";
echo "<pre>";
Print_r($t);
=======
=======
>>>>>>> d5284270d6911097aa4b1e3f19a73d1e8cb35104

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
<<<<<<< HEAD
>>>>>>> 1fcd787 (updates)
=======
>>>>>>> d5284270d6911097aa4b1e3f19a73d1e8cb35104
