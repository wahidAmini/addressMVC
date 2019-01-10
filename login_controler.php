<?php
// MySQL == un serveur de baseSSSSSSSS de données
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');


include("template/header.php");

    // Recieving uername ana password from users
    if(isset("username")){
        $username = $_POST["username"];
        $userPassword = $_POST["password"];

        // connection to database
   

        $user = "student";
        $dbpassword = "Mot2passe";

        $dbh = new PDO('mysql:host=localhost;dbname=Myaddress',$user,$dbpassword);

        if($username=="Wahid" && $userPassword=="wahid123"){
            header("location:profile.php");
        }
        else{
            echo " username or password inccorrect";
        }
    }    
    else{
      echo " please first Login";
    } 


            header("location:profile.php"); 
        }
        else{
            echo "Incorrect username or password !";
        }
    }
    include("template/footer.php");

?>