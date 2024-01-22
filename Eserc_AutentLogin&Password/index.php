<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <h1>Login</h1>

    <form action="controllo.php" method="post">

        Username: <input type="text" name="username" required> <br><br>
        Password: <input type="password" name="password" required>

        <input type="hidden" name="provenienza" value="1"> <br><br>

        <input type="submit" name="login" value="LOGIN">
        
    </form>

    <br> <button onclick="location.href='registrati.php'">REGISTRATI</button>
    
</body>
</html>