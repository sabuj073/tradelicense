<?php include_once __DIR__ . '/../../layouts/header.php'; ?>
<?php include_once __DIR__ . '/../banner.php'; ?>

    <div class="login-container mt-5">
    <?php include_once __DIR__ . '/../../layouts/inc/Logo.php'; ?>
        <h2>Login</h2>

        <form method="POST" action="">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="email" required placeholder="">
                <label for="username">Enter your email</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" required placeholder="">
                <label for="password">Enter your password</label>
            </div>
            <button type="submit" class="btn btn-primary">Click for login</button>
            <a href="/trade_search" class="forgot-password">Click here verify your trade license </a>
        </form>
    </div>
<?php include_once __DIR__ . '/../../layouts/footer.php'; ?>
