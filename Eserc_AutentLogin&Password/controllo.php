<?php

    session_start();

    $utenti = [
        'armenise' => '1234',
        'pippo' => '1234',
        'pluto' => '1234',
        'peppe' => '1234'
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["login"]) && $_POST["provenienza"] == 1) {

            $username = $_POST["username"];
            $password = $_POST["password"];

            if (array_key_exists($username, $utenti) && $utenti[$username] == $password) {

                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;

                echo "Benvenuto, $username! <br><br>";
                echo '<button onclick="location.href=\'continua.php\'">CONTINUA</button>';

            } else {

                echo "Credenziali non valide. Riprova. <br><br>";
                echo '<button onclick="location.href=\'index.php\'">INDIETRO</button>';

            }

        } elseif (isset($_POST['registrati']) && $_POST['provenienza'] == 3) {

            $nuovoUtente = $_POST['username'];
            $nuovaPassowrd = $_POST['password'];

            if (!array_key_exists($nuovoUtente, $utenti)) {

                $utenti[$nuovoUtente] = $nuovaPassowrd;

                $_SESSION['username'] = $nuovoUtente;
                $_SESSION['password'] = $nuovaPassowrd;

                echo "Benvenuto, $nuovoUtente! <br><br>";
                echo '<button onclick="location.href=\'continua.php\'">CONTINUA</button>';

            } else {

                echo "L'utente esiste già. Scegli un altro username. <br><br>";
                echo '<button onclick="location.href=\'registrati.php\'">TORNA ALLA REGISTRAZIONE</button>';
                
            }


        }

    }

?>