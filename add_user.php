<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("template/header.php");
include("model/model.php");
include("view/add_user_view.php");
include("template/footer.php");
?>