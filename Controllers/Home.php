<?php

// Only local access allowed.
if (!defined("API")) {
	die();
}

// [Route("api/Home")]
if (!isset($_GET["controller"]) || $_GET["controller"] != "Home") {
    return;
}

// [HttpGet]
if (isset($_GET["action"])) {

    // [HttpGet("GetMessage")]
    if ($_GET["action"] == "GetMessage") {
        $result["message"] = "Hello, this is the home page!";
    }

}