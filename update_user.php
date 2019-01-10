<?php
//active_error();
// MySQL == un serveur de baseSSSSSSSS de données
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("template/header.php");
include("model/model.php");

if(isset($_GET['id']) && !empty($_GET['id'])){
   
    $id =  filter_var($_GET['id'], FILTER_VALIDATE_INT);  
    /*
    $last_name = filter_var(GET['nom'], FILTER_SANITIZE_STRING);
     
    $first_name = filter_var(GET['prenom'], FILTER_SANITIZE_STRING);
    $email = filter_var(GET['email'], FILTER_SANITIZE_EMAIL);
    $telephone = filter_var(GET['telephone'], FILTER_SANITIZE_NUMBER_INT);
    $date = filter_var(GET['date_naissance'], FILTER_SANITIZE_STRING);
    $gender = filter_var(GET['sexe'], FILTER_SANITIZE_STRING);
    $country = filter_var(GET['pays'], FILTER_SANITIZE_STRING);
    $password = filter_var(GET['password'], FILTER_SANITIZE_STRING);
    */

    $user = getUserById($id);
    
} else {
    header("location: list_users.php");
}


include("view/update_user_view.php");
include("template/footer.php");
?>