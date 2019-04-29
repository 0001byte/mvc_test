
<html>
<head>
<title>Авторизация пользователя</title>

<link rel="shortcut icon" href="images/icon.gif">
<link rel="stylesheet" type="text/css" href="/styles/style.css">

<meta http-equiv="keywords" name="keywords" content="авторизация, mootools, ajax">
<meta http-equiv="description" name="description" content="Авторизуйтесь только у нас!">
<meta charset="utf-8">

<script src="http://ajax.googleapis.com/ajax/libs/mootools/1.5.1/mootools.js" type="text/javascript"></script>
<script type="text/javascript" src="auth.js"></script>
<script type="text/javascript">
</script>
</head>
<body>
	<div class="container">
 
		<form id="form_auth" onsubmit="auth(this); return false;" >
			<h2 class="center">Авторизация</h2>
			<label> Ваш email: </label>
			<input type="text" id="email" name="email" value=""> 
			<label> Ваш пароль: </label> 
			<input type="password" id="pass" name="pass" value=""> 
			<input type="submit" class="button_form" value="Войти">
		</form>

		<div id="user_menu" style="display:none;">
			<h2 class="center">Меню пользователя</h2>
			<a href="#">Профиль</a> | 
			<a href="#">Сообщения</a> | 
			<a href="#" onclick="authEnd();">Выйти</a>
		</div>

		<div id="res_div">
			Ожидается ввод данных...
		</div>


	</div>

</body>
</html>
