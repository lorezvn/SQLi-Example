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

        // Query SQL vulnerabile a SQL Injection
        $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";

        // multi_query per supportare query multiple (piggybacked queries)
        if ($conn->multi_query($sql)) {
            do {
                if ($result = $conn->store_result()) {
                    if ($result->num_rows > 0) {
                        $_SESSION['success'] = "Login successful!";
                        $_SESSION['username'] = $user;
                        header("Location: home.php");
                    } else {
                        $_SESSION['error'] = "Invalid username or password.";
                        header("Location: index.php");
                    }
                    $result->free();
                }
            } while ($conn->next_result());
        } else {
            $_SESSION['error'] = "An error occurred. Please try again.";
            header("Location: index.php");
        }
    
        $conn->close();
        exit(); 

    } else {
        header("Location: index.php");
        exit();
    }
?>