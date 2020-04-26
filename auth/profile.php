<?top('Профиль')?>
    <div class="content_game">
        <main class="transition-fade" id="swup">
            <h1><?=$_SESSION['username'] ?></h1><br><br>
            <h1><?=$_SESSION['balance'] ?></h1><br>
            <button id="click"></button>
            <div class="nav">
                <button id="logout" onclick="send_post('account', 'logout')">Выход</button>
                <button id="info">Инфо</button>
                <button id="magazine">Магазин</button>
            </div>
        </main>
    </div>
<?bottom()?>