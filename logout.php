<?php
session_start();

$_SESSION = array();	//セッション削除
if(ini_get ('session.use_cookies')){	//セッションにクッキーを使うか
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
session_destroy();

setcookie('email', '', time() - 3600);

header('Location: login.php');
exit();
?>