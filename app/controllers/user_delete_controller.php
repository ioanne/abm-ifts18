<?php
//Llamada al modelo
require_once("models/user_model.php");
$per=new users_model();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $dni = $_POST['dni'];
    $user=$per->delete_user($user_id);
    if ($user){
        // require_once("views/user_created_success_view.phtml");
        header("Location: http://localhost:8800/");
    }
    require_once("views/users_list_view.phtml");
}
else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $user_id = $_GET['user_id'];
    $user=$per->get_user($user_id);

    //Llamada a la vista
    require_once("views/user_delete_view.phtml");
}

?>
