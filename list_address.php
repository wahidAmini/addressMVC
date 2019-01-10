<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
	include("template/header.php");
	include("model/model.php");

	$addresses = get_all_address();
	include("view/list_address_view.php");
	include("template/footer.php");
?>