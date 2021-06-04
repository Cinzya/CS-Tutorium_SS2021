<?php
include_once 'db.php';

if (isset($_POST["registrieren"])) {
    echo "Es funktioniert!";
} else {
    header("location: ../registrieren.php");
}
?>