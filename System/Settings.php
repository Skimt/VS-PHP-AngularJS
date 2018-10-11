<?php

// Only local access allowed.
if (!defined("API")) {
	die();
}

// Only display certain errors in development mode.
if (!Config::INDEVMODE) {
	error_reporting(0);
}