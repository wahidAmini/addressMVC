<?php
//active_error();
ini_set('display_errors', 1);
ini_set('log_errors', 1);


include("model/model.php");

if(isset($_POST['id']) && !empty($_POST['id'])){
        //... vérifier si tout est bon
   
    $id =  filter_var($_POST['id'], FILTER_VALIDATE_INT);  
    $last_name = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $first_name = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);
    $date = filter_var($_POST['date_naissance'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['sexe'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['pays'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


     
    updateUserById($id,$last_name,$first_name,$email,$telephone ,$date ,$gender,$country,$password);
    echo "a record has been succesfully updated ";
    
} else {
    echo "Could not update an error has been accoured !";
    header("location: list_users.php");
}

include("template/header.php");
include("view/update_user_view.php");
include("template/footer.php");
?>