<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
</head>
<body>
    <h1>Form Registratie</h1>
    <form method="POST" action="registratie_handler.php">
        <input type="text" id="username" name="username">
        <label for="username">
            <b>
                Name of user
            </b>
        </label>
        <br><br>
        <input type="email" id="email" name="email">
        <label for="email">
            <b>
                Email
            </b>
        </label>
        <br><br>        
        <input type="age" id="age" name="age">
        <label for="age">
            <b>
                Age
            </b>
        </label>
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>