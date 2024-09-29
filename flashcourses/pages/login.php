<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles copy.css">
    <title>Connexion</title>
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

    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Mot de Passe:</label>
        <input type="password" name="password" required>

        <button type="submit">Connexion</button>
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
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        header("Location: index.php");
        exit();
    } else {
        echo "Email ou mot de passe invalide";
    }
}
$conn->close();
?>
