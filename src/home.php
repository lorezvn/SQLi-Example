<?php
    session_start();

    // Controlla se l'utente è autenticato
    if (!isset($_SESSION['success'])) {
        header("Location: index.php");
        exit();
    }
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
            <h1 class="text-center">Welcome</h1>
            <div class="text-center mt-4 mb-2">
                <p>You have successfully logged in</p>
            </div>
            <div class="d-grid mt-4">
                <a href="logout.php" class="btn btn-danger btn-block">Logout</a>
            </div>
        </div>
    </div>

</body>
</html>
