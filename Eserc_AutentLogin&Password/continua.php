<?php

    session_start();

    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];

        echo "Benvenuto, $username!<br>";


        echo '<form action="#" method="post"> <br>';
        echo 'Indirizzo Email: <input type="email" name="email" required> <br><br>';
        echo '<button type="submit">Invia</button> <br><br>';
        echo '<button type="reset">Reset</button>';
        echo '</form>';

    } else {

        header('Location: index.php');
        exit();

    }

?>
