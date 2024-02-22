<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <main>
        <section>
            <div class="insert-form">
                <div>
                    <h1>Insert Student</h1>
                </div>
                <form action="process.php" method="post">
                    <label for="first_name">First Name: </label>
                    <input type="text" name="first_name" id="first_name">
                    <label for="middle_name">Middle Name: </label>
                    <input type="text" name="middle_name" id="middle_name">
                    <label for="last_name">Last Name: </label>
                    <input type="text" name="last_name" id="last_name">
                    <button type="submit" name="insert_button">INSERT</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>