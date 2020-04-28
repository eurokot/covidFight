<?
if($_POST['item_1_f']){
	db();
	if($_SESSION['balance'] < 50){
		message('Недостаточно бактерий');
	}	
	else{
		$calc = $_SESSION['balance'] - 50;
		$upd_b = "UPDATE `login` SET `balance` = '".$calc."' WHERE `id` = $_SESSION[id]";
		$ub = mysqli_query($connection, $upd_b);
		$_SESSION['balance'] -= 50;
		if($_SESSION['item_1'] == 0){
			$upd_itm1 = "UPDATE `login` SET `item_1` = 1 WHERE `id` = $_SESSION[id]";
			$ui = mysqli_query($connection, $upd_itm1);
			$_SESSION['item_1'] += 1;
			$calc_click = $_SESSION['click'] + 2;
			$upd_c = "UPDATE `login` SET `click` = '".$calc_click."' WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['click'] += 2;
		}
		else{
			$calc_click = $_SESSION['click'] + 2;
			$upd_c = "UPDATE `login` SET `click` = '".$calc_click."' WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['click'] += 2;
		}		
		
	}
}
else if($_POST['item_2_f']){
	db();
	if($_SESSION['balance'] < 300){
		message('Недостаточно бактерий');
	}	
	else{
		$calc = $_SESSION['balance'] - 300;
		$upd_b = "UPDATE `login` SET `balance` = '".$calc."' WHERE `id` = $_SESSION[id]";
		$ub = mysqli_query($connection, $upd_b);
		$_SESSION['balance'] -= 300;
		if($_SESSION['item_2'] == 0){
			$upd_itm1 = "UPDATE `login` SET `item_2` = 1 WHERE `id` = $_SESSION[id]";
			$ui = mysqli_query($connection, $upd_itm1);
			$_SESSION['item_2'] += 1;
			$calc_click = $_SESSION['click'] + 10;
			$upd_c = "UPDATE `login` SET `click` = '".$calc_click."' WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['click'] += 10;
		}
		else{
			$calc_click = $_SESSION['click'] + 10;
			$upd_c = "UPDATE `login` SET `click` = '".$calc_click."' WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['click'] += 10;
		}		
		
	}
}
else if($_POST['item_3_f']){
	db();
	if($_SESSION['balance'] < 500){
		message('Недостаточно бактерий');
	}	
	else{
		$calc = $_SESSION['balance'] - 500;
		$upd_b = "UPDATE `login` SET `balance` = '".$calc."' WHERE `id` = $_SESSION[id]";
		$ub = mysqli_query($connection, $upd_b);
		$_SESSION['balance'] -= 500;
		if($_SESSION['item_3'] == 0){
			$upd_itm1 = "UPDATE `login` SET `item_3` = 1 WHERE `id` = $_SESSION[id]";
			$ui = mysqli_query($connection, $upd_itm1);
			$_SESSION['item_3'] += 1;
			$calc_click = $_SESSION['click'] + 100;
			$upd_c = "UPDATE `login` SET `click` = '".$calc_click."' WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['click'] += 100;
		}
		else{
			$calc_click = $_SESSION['click'] + 100;
			$upd_c = "UPDATE `login` SET `click` = '".$calc_click."' WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['click'] += 100;
		}		
		
	}
}
else if($_POST['item_4_f']){
	db();
	if($_SESSION['balance'] < 2000){
		message('Недостаточно бактерий');
	}	
	else{
		if($_SESSION['item_4'] == 0){
			$calc = $_SESSION['balance'] - 2000;
			$upd_b = "UPDATE `login` SET `balance` = '".$calc."' WHERE `id` = $_SESSION[id]";
			$ub = mysqli_query($connection, $upd_b);
			$_SESSION['balance'] -= 2000;
			$upd_itm1 = "UPDATE `login` SET `item_4` = 1 WHERE `id` = $_SESSION[id]";
			$ui = mysqli_query($connection, $upd_itm1);
			$_SESSION['item_4'] += 1;
			$upd_c = "UPDATE `login` SET `status` = 1 WHERE `id` = $_SESSION[id]";
			$uc = mysqli_query($connection, $upd_c);
			$_SESSION['status'] += 1;
		}
		else{
			message('Вы уже здоровы');
		}		
		
	}
}
?>

<div id="display_magazine" style="width: 100%;"><span id='status'>Статус: </span><?if($_SESSION['status'] == 0){
                    echo "<span id='st' style='color: red;'>  Болен</span>";
                }else{
                    echo "<span id='st' style='color: green;'>  Здоров</span>";
                } 
                ?></span><h2>Баланс: <?=$_SESSION['balance'] ?></h2> <h2>Клик: <?=$_SESSION['click'] ?></h2></div>
