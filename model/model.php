<?php

function activeError(){
    // MySQL == un serveur de baseSSSSSSSS de données
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

    return activeError();
}


function connectDB(){
    $servername = "mysql:host=localhost;dbname=Myaddress";
    $username = "student";
    $password = "Mot2passe";
    $pdo = new PDO($servername,$username,$password);
    $pdo->query("SET NAMES 'UTF8'");
    return $pdo;
}
// function that dispalys all users to web browser
function getAllUsers(){
    // connection to DB
    $pdo = connectDB();
    // preparation request en text 
    $sql_data = "select * from Users";
    // prepare the request 
    $statement = $pdo->prepare($sql_data);
    $statement->execute();
    $results=$statement->fetchAll();
    $pdo=null;
    return $results;
}

// A function that displays un specific user to borwser
function getUserDeteilById($id){
    $pdo = connectDB();
// preparation request from sql in text
    $sql = "SELECT user_id, prenom, expediteur, description, address, code_postal, city
        FROM Users
        INNER jOIN Courriers ON Courriers.id_user = Users.user_id
        INNER JOIN Address ON Address.id = Users.address_id
        WHERE user_id=:id;";
// transform in right 
    $statement = $pdo->prepare($sql);
// bindValue
    $statement->bindValue(':id',$id, PDO::PARAM_INT);
// execution 
    $statement->execute();
// fecth all
    $user = $statement->fetch();
    $pdo = null;
    return $user;
}

// a function that delets a specific user by it's ID  
function deleteUserById($id){
    $pdo = connectDB();
    $sql = "DELETE FROM Users WHERE user_id=:id;";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id',$id, PDO::PARAM_INT);
    //you need to use  : bindvalue ;) 
    $statement->execute();
    $pdo=null;
}

function addUser($last_name,$first_name,$email,$telephone,$date,$gender,$country,$password){
    //1 connected to db
    $pdo = connectDB();
    //2. build sql query as text
  	$sql = "INSERT INTO Users (nom, prenom, email, telephone, date_naissance, sexe, pays, password) 
  			VALUES (:nom, :prenom, :email, :telephone, :date_naissance, :sexe, :pays, :password);";
    //3./ prepare query
    //4./ bindValue
    //5. execute
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':nom',$last_name);
    $statement->bindValue(':prenom',$first_name);
    $statement->bindValue(':email',$email);
    $statement->bindValue(':telephone',$telephone);
    $statement->bindValue(':date_naissance',$date);
    $statement->bindValue(':sexe',$gender);
    $statement->bindValue(':pays',$country);
    $statement->bindValue(':password',$password);
   	$statement->execute();
}

function change_date($birth_date){
    $date = new DateTime($birth_date);
    //$date->format('Y-m-d');
    return $date->format('Y-m-d');
}

// for updating a user  record
function getUserById($id){
    $pdo = connectDB();
    $sql = "SELECT * FROM Users WHERE user_id=:id;";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id',$id, PDO::PARAM_INT);
    $statement->execute();
    $user = $statement->fetch();
    return $user;
}

function updateUserById($id,$name,$lName,$email,$telephone,$dateOfBirth,$gender,$country,$password){
    $pdo = connectDB();
    $sql = "UPDATE Users SET user_id='".$id."',prenom='".$name."',nom='".$lName."',email='".$email."',   telephone='".$telephone."',date_naissance='".$dateOfBirth."',sexe='".$gender."', pays='".$country."',password='".$password."';
        WHERE user_id=:id;";

    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id',$id, PDO::PARAM_INT);
    
    $statement->bindValue(':prenom',$name);
    $statement->bindValue(':nom',$lName);
    $statement->bindValue(':email',$email);
    $statement->bindValue(':telephone',$telephone);
    $statement->bindValue(':date_naissance',$dateOfBirth);
    $statement->bindValue(':sexe',$gender);
    $statement->bindValue(':pays',$country);
    $statement->bindValue(':password',$password);
   // $statement->bindValue(':name',$name);
    $statement->execute();
    $user = $statement->fetch();
    return $user;
}

function get_all_address(){
    $pdo = connectDB();
    $sql = "SELECT * FROM Address;";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll();
    return $results;
}

function get_address_by_id($id){
    $pdo = connectDB();
    $sql = "SELECT * FROM Address WHERE id = :id;";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id',$id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}


?>