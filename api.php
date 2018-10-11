<?php

// Local definition. 
define("API", 1);

// Include system files.
require_once("System/Configuration.php");
require_once("System/Database.php");
require_once("System/Settings.php");
//require_once("System/Facebook.php");

// [Produces("application/json")]
header("Content-type: application/json; charset=UTF-8");

// Default result.
$result = array();

// Include controllers.
require_once("Controllers/Home.php");
require_once("Controllers/About.php");
require_once("Controllers/Contact.php");
require_once("Controllers/Privacy.php");

// Encode and echo result.
echo json_encode($result);