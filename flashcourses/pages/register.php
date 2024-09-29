<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles copy.css">
    <title>Créer Compte</title>
</head>
<body>
<nav class="navbar">
    <div class="container">
        <div class="logo">
        <img src="../images/icon.png" alt="FlashCourses" class="icon">
            <a href="index.php">FlashCourse</a>
        </div>
        <div class="nav-links">
          <a href="register.php">Créer Compte</a> | 
          <a href="login.php">Connexion</a> | 
          <a href="update.php">Modifier mot de passe</a> |
          <a href="delete.php">Supprimer compte</a> |
          <a href="marks.php">Mes Notes</a> | 
          <br><a href="about.php">A propos</a>
        </div>
    </div>
</nav>


    <form action="register.php" method="post">
        <label for="name">Nom d'utlisateur:</label>
        <input type="text" name="username" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="password">Mot de Passe:</label>
        <input type="password" name="password" required>

        <label for="confirm_password">Confirmer Mot de Passe:</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">Créer Compte</button>
    </form>
    <footer class="footer">
    <div class="container">
      <p>&copy; 2024 FlashCourses. © Tous droits réservés.</p>
    </div>
  </footer>
</body>
</html>

<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password != $confirm_password) {
        echo "Veillez vérifier votre mot de passe";
        exit();
    }

$insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Votre compte a été créer avec succès";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

?>