<?php include 'includes/header.php'; ?>
<div class="login-container">
    <div class="login-box">
        <h2 class="text-center">Login</h2>

        <form method="POST" action="login.php" class="mt-4">
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']); 
                    ?>
                </div>
            <?php endif ?>
            <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" autocomplete="off">
            </div>
            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-block">Continue</button>
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
