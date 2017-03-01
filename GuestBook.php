<?php
	//для выведенния
	$view = file_get_contents('db.txt');
	$line = json_decode ( $view, true );
	


	
	define( 'DB_PATH', 'db.txt' );
	$newMessage = $_POST;
	$newMessage['time'] = date('d.m.Y H:i', time()); //добавление времени
	
	
	if( $newMessage['name'] != '' && $newMessage['email'] != '' && $newMessage['message'] != '' ) {
	//если загрузили файл
	 if($_FILES['file_upload']['error']==0){
			$fileExtension = pathinfo($_FILES['file_upload']['name'],PATHINFO_EXTENSION);
			$filename = uniqid().'.'.$fileExtension;
			$filePath = 'files/'.$filename;
			move_uploaded_file( $_FILES['file_upload']['tmp_name'], $filePath );
			$newMessage['file'] = $filePath;
		}
	 
	 
		if( file_exists( DB_PATH ) && file_get_contents( DB_PATH ) != '' ) { 
			$allMessages = json_decode ( file_get_contents( DB_PATH ), true );
			array_unshift( $allMessages, $newMessage );
		}
		else {
			$allMessages = [$newMessage];
		}
		 
		$res = file_put_contents( DB_PATH, json_encode( $allMessages ) );
		
		setcookie("name",$_POST['name'],time()+120);
		setcookie("email",$_POST['email'],time()+120);
		
		$_SESSION['notice'] = "Успішно";
	}
	
	 
	if(
		isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
	 && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
	 && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
	) {
	 // Если к нам идёт Ajax запрос, то ловим его
		echo json_encode( [ 'message' => $newMessage ] );
		exit;
	}
	 
	include "GuestBookView.php";
	
	unset($_POST);
	
	