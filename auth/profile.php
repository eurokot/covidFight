<?top('Профиль')?>
    <div class="content_game">
        <main class="transition-fade" id="swup">
            <h1><?=$_SESSION['username'] ?></h1><br><br>
            <div id="display"><h1><?=$_SESSION['balance'] ?></h1></div><br>
            <button id="click" onclick="move()"></button>
            <div class="nav">
                <button id="logout" onclick="send_post('account', 'logout')">Выход</button>
                <button id="info">Достижения</button>
                <button id="magazine">Магазин</button>
            </div>
        </main>
    </div>
<?bottom()?>