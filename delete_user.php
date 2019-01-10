<?php
    // MySQL == un serveur de baseSSSSSSSS de données
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("model/model.php");

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id =  filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $user = deleteUserById($id);
    
}
else {
    header("location: list_users.php");
}



?>