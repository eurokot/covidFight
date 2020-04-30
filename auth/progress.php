<?top('Профиль')?>
    <div class="content_game">
        <main class="transition-fade" id="swup">
            <h1>Достижения</h1>
            <div id="wrapper">
                <table>
                    <tr>
                        <td><span id='read'>Купить вакцину 1-го уровня</span></td>
                        <td id="log">
                            <? 
                                if($_SESSION['item_1'] == 1){
                                    echo "<img id='log_img' src='../img/good.png'>";
                                }
                                else{
                                    echo "<img id='log_img' src='../img/false.png'>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span id='read'>Купить вакцину 2-го уровня</span></td>
                        <td id="log">
                            <? 
                                if($_SESSION['item_2'] == 1){
                                    echo "<img id='log_img' src='../img/good.png'>";
                                }
                                else{
                                    echo "<img id='log_img' src='../img/false.png'>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span id='read'>Купить вакцину 3-го уровня</span></td>
                        <td id="log">
                            <? 
                                if($_SESSION['item_3'] == 1){
                                    echo "<img id='log_img' src='../img/good.png'>";
                                }
                                else{
                                    echo "<img id='log_img' src='../img/false.png'>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span id='read'>Излечиться от вируса</span></td>
                        <td id="log">
                            <? 
                                if($_SESSION['item_4'] == 1){
                                    echo "<img id='log_img' src='../img/good.png'>";
                                }
                                else{
                                    echo "<img id='log_img' src='../img/false.png'>";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="nav">
                <a id="logout" href="/profile">Назад</a>
                <button id="info" onclick="go('progress')">Достижения</button>
                <button id="magazine" onclick="go('magazine')">Магазин</button>
            </div>
        </main>
    </div>
<?bottom()?>