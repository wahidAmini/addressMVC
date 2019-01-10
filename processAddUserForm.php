<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

// print_r($_POST);

//1. include model in order to be abble to access model function
include("model/model.php");

//2. get data from the POST Request in order to get the value typed by the visitor
if(!empty($_POST['fname']) && !empty($_POST['lname'])){
	
    $first_name = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    
    $telephone = filter_var($_POST['telephone'], FILTER_VALIDATE_INT);

    $birth_date = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
    $date = change_date($birth_date);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['gender']);
    $country = filter_var($_POST['country']);
    add_user($last_name,$first_name,$email,$telephone,$date,$gender,$country,$password);
    
    echo"a record has been successfuly registered ";
}
else{
	
    header("location:list_users.php");
	
}


//3. filter those entries (/!\ never trust the user ) ==> filter_var. 
//4. call the function add_user( in the model :)
//5. reward the visitor with a message if everythign is ok by calling the good view (view/success.php) 

?>