<?php include 'includes/header.php'; ?>

<?php
    // Verifica se l'utente ha effettuato l'accesso correttamente
    if (!isset($_SESSION['success'])) {
        header("Location: index.php");
        exit();
    }
?>

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

<?php include 'includes/footer.php'; ?>
