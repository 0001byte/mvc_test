
<?php

	include("connect_db.php");

	// false, если не все поля содержат информацию
	$full_info=0;

   	if(empty($_POST['email']) || empty($_POST['pass'])) {
   		echo "Заполните все поля формы!"; 
   	} else {
   		$email=$mysqli->real_escape_string($_POST['email']);
   		$full_info=1;
   	}

	//если все поля были заполнены
	if($full_info){

		// создаем подготовленное выражение и получаем юзера из БД
		$stmt = $mysqli->prepare("SELECT pass FROM users WHERE email=?");
	    $stmt->bind_param("s", $email);
	    $stmt->execute();
	    $stmt->bind_result($pass);
	    $stmt->fetch();

	    //Проверка пароля
	    if($pass==$_POST['pass']){
	    	echo "Вы авторизованы, ".$email."!";
	    	echo "<input type='hidden' id='auth' value='true'>";
	    	session_start();
	    	$_SESSION["email"] = $email;
	    } else {
	    	echo "К сожалению, Вы неверно ввели логин или пароль :(";
	    }

		$mysqli->close();
	}

?>