<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["login"]) && $_POST["provenienza"] == 1) {

            $utenti = [
                'armenise' => '1234',
                'pippo' => '1234',
                'pluto' => '1234'
            ];

            $username = $_POST["username"];
            $password = $_POST["password"];

            if (array_key_exists($username, $utenti) && $utenti[$username] == $password) {

                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;

                echo "Benvenuto, $username!";
                echo '<a href="page4.php">Continua</a>';

            } else {

                echo "Credenziali non valide. Riprova.";
                echo '<a href="index.php">Indietro</a>';

            }

        } elseif (isset($_POST['registrati']) && $_POST['provenienza'] == 3) {

            $nuovoUtente = $_POST['username'];
            $nuovaPassowrd = $_POST['password'];

            if (!array_key_exists($nuovoUtente, $users)) {

                $users[$nuovoUtente] = $nuovaPassowrd;

                $_SESSION['username'] = $nuovoUtente;
                $_SESSION['password'] = $nuovaPassowrd;

                echo "Benvenuto, $nuovoUtente!";
                echo '<a href="page4.php">Continua</a>';

            } else {

                echo "L'utente esiste già. Scegli un altro username.";
                echo '<a href="page3.php">Torna alla registrazione</a>';
                
            }


        }

    }

?>