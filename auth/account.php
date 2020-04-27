<?

if($_POST['logout_f']){
	session_destroy();
	go('home');
}

?>