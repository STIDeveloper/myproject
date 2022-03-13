<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id16265174_lerourayan');
define('DB_PASSWORD', 'DN}>2}bMhN[m{uYU');
define('DB_NAME', 'id16265174_users');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>