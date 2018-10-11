<?php

// Only local access allowed.
if (!defined("API")) {
	die();
}

class Config {

	// Database.
	const ISUSINGDB = false;				// Is this website using a database?
	const CHARSET = "utf8";					// Sets the charset of the database.
	const HASCHARSET = true; 				// Set to false if they haven't used proper UTF-8 collate in the database.
	const DBHOST = "localhost";				// Sets the database host name.
	const DBUSER = "";						// Sets the database username.
	const DBPASS = "";						// Sets the database password.
	const DBNAME = "";						// Sets the database name.

	// Site.
	const INDEVMODE = false;			    // Display error messages?
	
    // Facebook.
    const ISUSINGFBGRAPH = true;			// Is this website using FB Graph?
    const FBGRAPHVERSION = "v2.12";			// Sets the version of the graph.
    const FBAPPID = "";						// Sets the FB App id.
    const FBAPPSECRET = "";					// Sets the FB App secret.

}