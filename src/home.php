<?php
session_start();

// Controlla se l'utente è autenticato
if (!isset($_SESSION['success'])) {
    header("Location: index.php");
    exit();
}

// Recupera il nome utente dalla sessione
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQLi Homework</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1 class="text-center">Welcome, <?php echo $username?>!</h1>
            <div class="text-center mt-4">
                <p>You have successfully logged in</p>
            </div>
        </div>
    </div>

</body>
</html>
