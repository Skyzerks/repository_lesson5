<?php
	// var_dump($_POST);
	// exit();

	// $showtime = time();
	// echo $showtime.'<br>';
	// echo date("d-m-Y H:i", $showtime);
	// exit();
	
	
	
	define( 'DB_PATH', 'db.txt' );

	$newMessage = $_POST;
	$fileData = file_get_contents(DB_PATH);
	$getDate = date("d-m-Y H:i:s", time());
	
	 // echo json_encode(['result' => 0]);
	 // exit();
	
	$inputData = [
		'name' => $newMessage['name'],
		'email' => $newMessage['email'],
		'message' => $newMessage['message'],
		'time' => $getDate
	];
	
	
	if( !empty($newMessage) &&$inputData!=null ) {
	 
		if( count($fileData) > 0 ) { 
			$allMessages = json_decode ( $fileData, true );
			array_unshift( $allMessages, $inputData );
		}
		else {
			$allMessages = [$inputData];
		}
		 
		$res = file_put_contents( DB_PATH, json_encode( $allMessages ) );
	}
	
	var_dump($temp);
	 
	if(
		isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
	 && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
	 && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
	) {
	 // Если к нам идёт Ajax запрос, то ловим его
		echo json_encode( [ 'mess' => $newMessage ] );
		exit;
	}
	 
	include "GuestBookView.php";
	
	