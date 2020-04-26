<?

if($_POST['register_f'])
    db();

    if (mysqli_num_rows(mysqli_query($connection, "SELECT `id` FROM `login` WHERE `username` = '$_POST[login]'")) )
        message('Данное имя пользователя уже зарегистрированно');

    mysqli_query($connection, "INSERT INTO `login` VALUES ('', '$_POST[login]', '$_POST[pwd]')");

    message('Регистрация завершена');
?>