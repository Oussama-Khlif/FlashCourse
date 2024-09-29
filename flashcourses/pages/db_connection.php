<?php
$host = "localhost";
$username = "oussama";
$password = "oussama.2000";
$database = "FlashCourses";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connexion échoué: " . $conn->connect_error);
}
//echo "Connecté avec succès";
?>