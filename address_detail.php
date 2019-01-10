<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("template/header.php");

// prendre conaissance de model
include("model/model.php");

// analyze the url filter NTU

if(isset($_GET['add_id']) && !empty($_GET['add_id'])){
    $id =  filter_var($_GET['add_id'], FILTER_VALIDATE_INT);
    $address = get_address_by_id($id);

} else {
    header("location: list_users.php");
}

 
include("view/detail_address_view.php");
include("template/footer.php");
?>