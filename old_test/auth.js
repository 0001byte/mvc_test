//прячет форму авторизации
function hideAuthForm(){
	$(form_auth).setStyle('display', 'none');
}
//показывает форму авторизации
function showAuthForm(){
	$(form_auth).setStyle('display', 'block');
}

//прячет меню пользователя
function hideUserMenu(){
 	$(user_menu).setStyle('display', 'none');
}
//показывает меню пользователя
function showUserMenu(){
 	$(user_menu).setStyle('display', 'block');
}

//проверка на авторизованность
function isAuth(){
var auth = $('auth').get('value');
if (auth=="true") { 
	hideAuthForm(); 
	showUserMenu()
	}
}

//авторизация пользователя
function auth(form_array) {
form_array = form_array.toQueryString();
          var myRequest = new Request.HTML({
            url: ('auth.php'),
            method: 'post', update: 'res_div', data: form_array,
    onSuccess: function(){
				isAuth();
        }
        }).send(); 
}

//завершение сессии 
function authEnd() {
          var myRequest = new Request.HTML({
            url: ('quit.php'),
            update: 'res_div',
    onSuccess: function(){
				hideUserMenu();
				showAuthForm();
        }
        }).send(); 

}