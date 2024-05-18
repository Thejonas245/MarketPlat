<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>MarketPlat | Log In with your account!</title>
</head>
<body>
    <main>
        <form class="form-login" action="../dashboard.php" method="post">
            <script>
                <?php
                    include['driver.php']
                ?>
            </script>
            <label for="email">Log In on MarketPlat with your account</label>
            <input type="email" placeholder="Enter your email" name="email" id="email">
            <input type="password" placeholder="Enter your password" name="password" id="password">
            <div>
            <p>keep session</p>
            <input type="checkbox" name="keepsession" id="keepsession">
            </div>
            <input type="submit" value="Log In">
            <a href='#'>Forgot your password?</a>
        </form>
    </main> 
</body>
</html>