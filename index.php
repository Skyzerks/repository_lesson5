<?php

// setcookie("hi","Hello!",time()+60);
// /*name is your cookie's name
// value is cookie's value
// $int is time of cookie expires*/

// echo $_COOKIE["hi"];

//exit();

session_start();


	if (false !== strpos($_SERVER['REQUEST_URI'], 'guestbook')) {
		include "GuestBook.php";
	}
	else if( $_SERVER['REQUEST_URI'] == '/' ) {			
		$view = file_get_contents('db.txt');
		$line = json_decode ( $view, true );
		include "indexView.php";
	}
	
if($_SESSION['notice']){
	unset($_SESSION['notice']);
}


//mail('example@mail.ua', 'MySubject', 'Hi!');

//conf.php
// $config = [
	// 'admin_email' => 'ss@es.com'
// ];