<?php

// Only local access allowed.
if (!defined("API")) {
	die();
}

// [Route("api/Contact")]
if (!isset($_GET["controller"]) || $_GET["controller"] != "Contact") {
    return;
}

// [HttpGet]
if (isset($_GET["action"])) {

    // [HttpGet("GetMessage")]
    if ($_GET["action"] == "GetMessage") {
        $result["message"] = "Hello, this is the contact page!";
    }

}