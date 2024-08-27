<?php
    session_start(); 

    // Controlla se i dati POST sono stati inviati
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $servername = "db";
        $username = "user";
        $password = "password";
        $dbname = "sqli_db";

        // Crea la connessione
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica la connessione
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Ricevi i dati POST
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Verifica che i campi non siano vuoti
        if (empty($user) || empty($pass)) {
            $_SESSION['error'] = "Username and password cannot be empty.";
            header("Location: index.php");
            exit();
        }

        // Query SQL vulnerabile a SQL Injection
        $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['success'] = "Login successful!";
            header("Location: home.php");
        } else {
            $_SESSION['error'] = "Invalid username or password.";
            header("Location: index.php");
        }

        $conn->close();
        exit(); 

    } else {
        header("Location: index.php");
        exit();
    }
?>