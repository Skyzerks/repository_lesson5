<?php 
	//echo "main".'<br>';
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Главная страница</title>
		<link href="stylesheet.css" type="stylesheet" type="text/css">
	</head>
	<body>
		<div id="top">
			<div id="logo_image">
				<img src="icon.jpeg" alt="Иконка">
			</div>
			<div id="navigation_top">
				<div>Главная</div>
				<div">Новости</div>
				<div>Каталог</div>
				<div onClick='location.href="/guestbook"'>Контакты</div>
			</div>
		</div>
		<hr/>
		<div id="content_container">
			<div id="header">
				<h2>Главная страница</h2>
			</div>
			
			<div id="services">
				<h3>Услуга1</h3>
				<h3>Услуга2</h3>
				<h3>Услуга3</h3>
			</div>
			
			<form id="fill_form" method="POST">

				 <input type="text" id="name" name="name" placeholder="Ваше имя"> <br/>
				 <input type="text" id="email" name="email" placeholder="Ваш e-mail"> <br/>
				 <input type="text" id="message" name="message" placeholder="Текст сообщения"> <br/>

				 <button type="submit">Отправить</button>

			</form>
			
			<div id="show_input">
				<?php var_dump($_POST)?>
			</div>
			
			
			
		</div>
		<div id="bottom">
			<div id="navigation_bottom">
				<hr/>
				<div>Главная</div>
				<div>Новости</div>
				<div>Каталог</div>
				<div onClick='location.href="/guestbook"'>Контакты</div>
			</div>
			<h5>Company Name - 2017</h5>
		</div>
	</body>
</html>

