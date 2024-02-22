<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <main>
        <section>
            <div class="login-form">
                <div>
                    <p>Integrative App</p>
                    <h1>Sign up!</h1>
                </div>
                <form action="process.php" method="post">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email">
                    <label for="password">Password: </label>
                    <input type="text" name="password" id="password">
                    <label for="first_name">First Name: </label>
                    <input type="text" name="first_name" id="first_name">
                    <label for="middle_name">Middle Name: </label>
                    <input type="text" name="middle_name" id="middle_name">
                    <label for="last_name">Last Name: </label>
                    <input type="text" name="last_name" id="last_name">
                    <button type="submit" name="register_button">Sign up!</button>
                </form>
                <p>Already have an account? <a href="login.php">Sign up!</a></p>
            </div>
        </section>
    </main>
</body>
</html>