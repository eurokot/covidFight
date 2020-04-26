<?top('Главная страница')?>
    <div class="box">
        <main class="transition-fade" id="swup">
            <h1>Вход</h1>
            <p style="color: red"; font-weight: bold;><?php echo $alert?></p>
            <p style="color: green"; font-weight: bold;><?php echo $good?></p>
            <input type="text" name="login" id="login" value="" placeholder="Логин">
            <input type="password" name="pwd" id="pwd" value="" placeholder="Пароль">
            <button name="go" id="go" onclick="send_post('account', 'login', 'login.pwd')">Вход</button><br>
            <a id="reg" href="/registration">Регистрация</a>
        </main>
    </div>
<?bottom()?>