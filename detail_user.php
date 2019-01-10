<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("template/header.php");

// prendre conaissance de model
include("model/model.php");

// analyze the url filter NTU

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id =  filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $user = getUserDeteilById($id);

} else {
    header("location: list_users.php");
}

 
include("view/detail_user_view.php");
include("template/footer.php");

?>