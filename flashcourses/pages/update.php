<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Mot de Passe</title>
    <link rel="stylesheet" type="text/css" href="../assets/styles copy.css">
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


    <h2>Modifier mot de passe</h2>

    <form action="update.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="current_password">Mot de Passe Actuelle:</label>
        <input type="password" name="current_password" required>

        <label for="new_password">Nouveau Mot de Passe:</label>
        <input type="password" name="new_password" required>

        <button type="submit">Modifier</button>
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
    $email = $_POST["email"];
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $select_query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($select_query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($current_password === $user['password']) {
            $update_query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";

            if ($conn->query($update_query) === TRUE) {
                header("Location: register.php");
                exit();
            } else {
                echo "Error: " . $update_query . "<br>" . $conn->error;
            }
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Utilisateur introuvable";
    }
}
$conn->close();
?>