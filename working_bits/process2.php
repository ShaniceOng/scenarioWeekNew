<?php
	session_start();
	if (isset($_SESSION['loggedin'])) {
	    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
	    $username = $_SESSION['username'];
	} else {
	    echo "Please log in first to see this page.";
	}
?>