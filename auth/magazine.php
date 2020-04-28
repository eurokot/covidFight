<?top('Профиль')?>
    <div class="content_game">
        <main class="transition-fade" id="swup">
            <h1>Магазин</h1>
            <div id="display_magazine"><span id='status'>Статус: </span> 
                <?if($_SESSION['status'] == 0){
                    echo "<span id='st' style='color: red'>  Болен</span>";
                }else{
                    echo "<span id='st' style='color: green'>  Здоров</span>";
                } 
                ?></span><h2>Баланс: <?=$_SESSION['balance'] ?></h2> <h2>Клик: <?=$_SESSION['click'] ?></h2></div><br>
            <div id="wrapper">
                <table>
                    <tr>
                        <th id='icon'>Иконка</th>
                        <th>Описание</th>
                        <th id='icon_buy'>Купить</th>
                    </tr>
                    <tr>
                        <td><img id='info_img' src="../img/item_1.png"></td>
                        <td><span id='read'>Вакцина 1-го уровня придаёт вам сил (+2 за клик)<br>Стоимость - 50</span></td>
                        <td id="btn_buy"><button id='buy' onclick="buy('update_magazine','item_1')"></button></td>
                    </tr>
                    <tr>
                        <td><img id='info_img' src="../img/item_2.png"></td>
                        <td><span id='read'>Вакцина 2-го уровня придаёт вам сил (+10 за клик)<br>Стоимость - 300</span></td>
                        <td id="btn_buy"><button id='buy' onclick="buy('update_magazine','item_2')"></button></td>
                    </tr>
                    <tr>
                        <td><img id='info_img' src="../img/item_3.png"></td>
                        <td><span id='read'>Вакцина 3-го уровня придаёт вам сил (+100 за клик)<br>Стоимость - 500</span></td>
                        <td id="btn_buy"><button id='buy' onclick="buy('update_magazine','item_3')"></button></td>
                    </tr>
                    <tr>
                        <td><img id='info_img' src="../img/item_4.png"></td>
                        <td><span id='read'>Антидот полностью излечит вас<br>Стоимость - 2000</span></td>
                        <td id="btn_buy"><button id='buy' onclick="buy('update_magazine','item_4')"></button></td>
                    </tr>
                </table>
            </div>
            <div class="nav">
                <a id="logout" href="/profile">Назад</a>
                <button id="info">Достижения</button>
                <button id="magazine">Магазин</button>
            </div>
        </main>
    </div>
<?bottom()?>