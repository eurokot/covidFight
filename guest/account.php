<?
db();

if($_POST['register_f']){

    if (mysqli_num_rows(mysqli_query($connection, "SELECT `id` FROM `login` WHERE `username` = '$_POST[login]'")) )
        message('Ошибка','Данное имя пользователя уже зарегистрированно', 'error');

    if(!empty($_POST['login']) and !empty($_POST['pwd'])){
        mysqli_query($connection, "INSERT INTO `login` VALUES ('', '$_POST[login]', '$_POST[pwd]', 0, 1, 0, 0, 0, 0, 0)");
        message('Успешно', 'Регистрация завершена', 'success');
    }
    else{
        message('Ошибка', 'Заполните все поля', 'error');
    }
}
else if($_POST['login_f']){
    db();
    if(!empty($_POST['login']) and !empty($_POST['pwd'])){
        $msfind =  "SELECT * FROM `login` WHERE `username` = '$_POST[login]' and `password` = '$_POST[pwd]';";
        $query = mysqli_query($connection, $msfind);
        if(!mysqli_num_rows($query))
            message('Ошибка', 'Проверьте правильность данных', 'error');
        
        $row = mysqli_fetch_assoc($query);
    
        foreach ($row as $key => $val)
            $_SESSION[$key] = $val;
    
        go('profile');
    }
    else{
        message('Ошибка', 'Заполните все поля', 'error');
    }
}
?>