<?php

    session_start();

    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];

        echo "Benvenuto, $username!<br>";


        echo '<form action="#" method="post">';
        echo 'Indirizzo Email: <input type="email" name="email" required>';
        echo '<button type="submit">Invia</button>';
        echo '<button type="reset">Reset</button>';
        echo '</form>';

    } else {

        header('Location: index.php');
        exit();

    }
    
?>
