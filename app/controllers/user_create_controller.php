<?php
require_once("models/user_model.php");
$per=new users_model();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $dni = $_POST['dni'];
    $user=$per->create_user($name, $last_name, $dni);
    if ($user){
        header("Location: http://localhost:8800/");
    }
    require_once("views/user_create_view.phtml");
}
else if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    require_once("views/user_create_view.phtml");
}

?>
