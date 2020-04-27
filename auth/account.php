<?

if($_POST['logout_f']){
	session_destroy();
	go('home');
}
else if($_POST['click_f']){
	db();
	$calc = $_SESSION['balance'] + $_SESSION['click'];

	$alc = "UPDATE `login` SET `balance` = '".$calc."' WHERE `id` = $_SESSION[id]";
	$am = mysqli_query($connection, $alc);
	if ($am == 1){
		$_SESSION['balance'] += $_SESSION['click'];
		go('profile');
	}

    // $_SESSION['balance'] += $_SESSION['click'];
}

?>