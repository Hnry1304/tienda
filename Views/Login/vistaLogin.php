<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Views/Assets/Css/login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="?class=Login&function=checkUser" method="post">
            <label for="Username">
                Username
                <input type="text" name="username">
            </label>

            <label for="Contrasena">
                Contrasena
                <input type="text" name="contrasena">
            </label>

            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>