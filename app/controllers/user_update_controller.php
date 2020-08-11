<?php
//Llamada al modelo
require_once("models/user_model.php");
$per=new users_model();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $dni = $_POST['dni'];
    $user=$per->update_user($user_id, $name, $last_name, $dni);
    if ($user){
        // require_once("views/user_created_success_view.phtml");
        header("Location: http://localhost:8800/");
    }
    require_once("views/user_create_view.phtml");
}
else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $user_id = $_GET['user_id'];
    $user=$per->get_user($user_id);
    // echo $user['name'];
    // echo $user['last_name'];
    // echo $user['dni'];

    //Llamada a la vista
    require_once("views/user_update_view.phtml");
}

?>