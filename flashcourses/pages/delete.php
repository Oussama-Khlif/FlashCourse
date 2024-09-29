<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Compte</title>
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

    <h2>Supprimer Compte</h2>

    <form action="delete.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Mot de Passe:</label>
        <input type="password" name="password" required>

        <button type="submit">Supprimer</button>
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
    $select_query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($select_query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) {
            $delete_query = "DELETE FROM users WHERE email = '$email'";

            if ($conn->query($delete_query) === TRUE) {
                header("Location: register.php");
                exit();
            } else {
                echo "Erreur: " . $delete_query . "<br>" . $conn->error;
            }
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Utilisateur introuvable.";
    }
}
$conn->close();
?>