<?php
	session_start();
	if(isset($_SESSION['email'])){
	echo "Приходите ещё,".$_SESSION['email']." :(";
		$_SESSION = array(); 
		session_destroy();
	}else{ echo "Чтобы завершить сеанс, нужно его начать :)";}
?>