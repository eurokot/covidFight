<?top('Регистрация')?>
    <div class="box">
        <main class="transition-fade" id="swup">
            <h1>Регистрация</h1>
            <input type="text" name="login" id="login" value="" placeholder="Логин">
            <input type="password" name="pwd" id="pwd" value="" placeholder="Пароль">
            <button name="add" id="add" onclick="send_post('account', 'register', 'login.pwd')">Зарегистрироваться</button><br>
            <a id="back" href="/home">Назад</a>
        </main>
    </div>
<?bottom()?>    