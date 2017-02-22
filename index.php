<?php

	if (false !== strpos($_SERVER['REQUEST_URI'], 'guestbook')) {
		include "GuestBook.php";
	}
	else if( $_SERVER['REQUEST_URI'] == '/' ) {
		include "indexView.php";
	}
	
