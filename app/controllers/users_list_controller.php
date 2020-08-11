<?php
//Llamada al modelo
require_once("models/user_model.php");
$per=new users_model();
$users=$per->get_users();
 
//Llamada a la vista
require_once("views/users_list_view.phtml");
?>
