<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrati Page</title>
    <script>
        function controllaPassword() {
            var password = document.getElementById("password").value;
            var confermaPassword = document.getElementById("conferma_password").value;

            if (password != confermaPassword) {
                alert("La password e la conferma password devono coincidere.");
                return false;
            } else {
                return true;

            }
        }
    </script>
</head>
<body>

    <h1>Registrati</h1>

    <form action="controllo.php" method="post" onsubmit="return controllaPassword();">

        Username: <input type="text" name="username" required> <br><br>
        Password: <input type="password" id="password" name="password" required> <br><br>
        Conferma Password: <input type="password" id="conferma_password" name="conferma_password" required>

        <input type="hidden" name="provenienza" value="3"> <br><br>

        <input type="submit" name="registrati" value="REGISTRATI">

    </form>
    
</body>
</html>
