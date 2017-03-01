<?php
	// var_dump($line);
	// echo '<hr/>';
	//дописать с html через ajax обработку
	
	//var_dump($_FILES);
	//echo '<br/>';
?>

<?= $_SESSION['notice'] ?><br/>

<div id="messages">
	<table id="messages">
		<tbody>
		<?php foreach($line as $key => $chunk){ ?>
			<tr>
				<?php foreach($chunk as $key1 => $value1){ ?>
					<td>
						<?= $value1 ?>   <!-- выведение значения  -->
						
					</td>
				
				<?php } ?>
			</tr>
		<?php } ?>
		</tbody>
		<!--	<hr/>   -->
	</table>
</div>



<form id="guestForm" action="/guestbook" method="POST" enctype="multipart/form-data">

	 <input type="text" id="name" name="name" placeholder="Name"> <br/>
	 <input type="text" id="email" name="email" placeholder="Email"> <br/>
	 <input type="text" id="message" name="message" placeholder="Message"> <br/>

	Select file to upload:<br/>
	<input type="file" name="file_upload" id="f_send">
	
	
	 <button type="submit">SEND</button>
	 
</form>
	
	
	<br/><?php echo 'user: '.$_COOKIE['name'].'<br/>'.'email: '.$_COOKIE['email']  ?><br/>
	
	
<!--	Возврат на предыдущую страницу -->
<div onClick='location.href="../"'>Назад</div>

<script src="jquery.js"></script>
<script>
	// $(document).ready( function(e) { // Загрузка документа
		// $('#guestForm').submit( function(e) { //операция отправки данных формы
			// e.preventDefault(); //предотвратить стандартное действие: обновление страницы
			// $.ajax({
				// method: "POST",
				// url: "/GuestBook.php",
				// data: { 
					// name: $('#name').val(), 
					// email: $('#email').val(),
					// message:  $('#message').val()
					// }
			// }).done( function( data ) {

				// var res = JSON.parse( data ); //данные формы
		
				// if( res.message) { //условие: если были введены данные
					// el = document.createElement('div'); //создание пустого тега div
					// $(el).html( 
						// '<table><tbody><tr><td>'+$('#name').val() + '</td>' + 
						// '<td>'+$('#email').val() + '</td>' +
						// '<td>'+$('#message').val() + '</td>' +						
						// '<td>'+res.message.time + '</td></tr></tbody></table><hr/>' );
					// console.log(el);
					// $('#messages').prepend(el);
				// }    
			// });
		// });
	// });
// </script>
