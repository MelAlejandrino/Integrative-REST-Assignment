<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <section>
            <div class="login-form">
                <div>
                    <p>Integrative App</p>
                    <h1>Sign in</h1>
                </div>
                <form action="process.php" method="post">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                    <button type="submit" name="login_button">Sign in</button>
                </form>
                <p>Don't have an account yet? <a href="register.php">Sign in!</a></p>
            </div>
        </section>
    </main>
</body>
</html>