<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("template/header.php");

//1. make the connection with model : like db connection
include("model/model.php");

// 2 analyze the user querry if needed analyze NTU

//3 request the data necessary model
$users = getAllUsers();


// request for the best view , or the best template like display the data from db
include("view/list_users_view.php");

include("template/footer.php");

?> 