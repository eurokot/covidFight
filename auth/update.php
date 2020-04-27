<?
db();
$calc = $_SESSION['balance'] + $_SESSION['click'];

$alc = "UPDATE `login` SET `balance` = '".$calc."' WHERE `id` = $_SESSION[id]";
$am = mysqli_query($connection, $alc);
$_SESSION['balance'] += $_SESSION['click'];

?>

<div id="display"><h1><?=$_SESSION['balance'] ?></h1></div>