<? 

if ($_SERVER['REQUEST_URI'] == '/')
    $page = 'home';
else
    $page = substr($_SERVER['REQUEST_URI'], 1);

session_start();

include "config.php";

if (file_exists("all/$page.php"))
    include "all/$page.php";
else if ($_SESSION['id'] and file_exists("auth/$page.php"))
    include "auth/$page.php";
else if (!$_SESSION['id'] and file_exists("guest/$page.php"))
    include "guest/$page.php";

else
    exit('Страница 404');




function db() {
    global $connection;
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_set_charset($connection, "utf8");
    if (!$connection)
        exit('Ошибка подключения к БД');
}

function top($title){
    include 'html/top.php';
}

function bottom(){
    include 'html/bottom.php';
}

function message($title, $text, $status){
    echo json_encode(array(
        'title' => $title,
        'text' => $text,
        'status' => $status
    ));
}


function location($url){
    exit(header("location: /$url"));
}

function go($url){
    exit('{"go":"'.$url.'"}');
}

?>