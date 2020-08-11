<?php
require_once("models/user_model.php");
$per=new users_model();
$users=$per->get_users();
 
require_once("views/users_list_view.phtml");
?>
