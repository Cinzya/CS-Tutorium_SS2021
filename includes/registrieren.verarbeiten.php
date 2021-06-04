<?php
include_once 'db.php';
include_once 'funktionen.php';

if (isset($_POST["registrieren"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $passwort = $_POST["passwort"];
    $passwortWiederholung = $_POST["passwortWiederholung"];

    if (ungueltigeUName($username) !== false) {
        header("location: ../registrieren.php?error=ungueltigerUName");
        exit();
    }
    if (pwtPassen($passwort, $passwortWiederholung) !== false) {
        header("location: ../registrieren.php?error=ungueltigesPwt");
        exit();
    }
    if (UNameExistiert($mysqli, $username, $email) !== false) {
        header("location: ../registrieren.php?error=UExistiert");
        exit();
    }

    erstelleUser($mysqli, $username, $email, $passwort);

} else {
    header("location: ../registrieren.php");
}

?>