<?

if($_POST['register_f']){
    db();

    if (mysqli_num_rows(mysqli_query($connection, "SELECT `id` FROM `login` WHERE `username` = '$_POST[login]'")) )
        message('Данное имя пользователя уже зарегистрированно');

    mysqli_query($connection, "INSERT INTO `login` VALUES ('', '$_POST[login]', '$_POST[pwd]', 0, 1, 0, 0, 0, 0, 0)");

    message('Регистрация завершена');
}
else if($_POST['login_f']){
    db();

    $msfind =  "SELECT * FROM `login` WHERE `username` = '$_POST[login]' and `password` = '$_POST[pwd]';";
    $query = mysqli_query($connection, $msfind);
    if(!mysqli_num_rows($query))
        message('Проверьте правильность данных');
    
    $row = mysqli_fetch_assoc($query);

    foreach ($row as $key => $val)
        $_SESSION[$key] = $val;

    go('profile');
}
?>