<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Marks</title>
    <link rel="stylesheet" href="../assets/styles copy.css">
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

<h1>Notes Examens</h1>

<form action="marks.php" method="post">
    <label for="username">Entrer votre nom:</label>
    <input type="text" id="username" name="username" required>
    <button type="submit" name="submit">Valider</button>
</form>

<?php
include 'db_connection.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];

    $sql = "SELECT * FROM marks WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Les notes pour $username:</h2>";
        while($row = $result->fetch_assoc()) {
            
            echo "" . $row["subject"] . "   " . $row["marks"] . "<br>";
        }
    } else {
        echo "<h2>Pas de notes pour ce nom d'utilisateur.</h2>";
    }
}

$conn->close();
?>
    <footer class="footer">
    <div class="container">
      <p>&copy; 2024 FlashCourses. © Tous droits réservés.</p>
    </div>
  </footer>
</body>
</html>
