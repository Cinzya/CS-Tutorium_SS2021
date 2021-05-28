<?php
    $mysqli = new mysqli("localhost", "root", "", "studentenliste") or die(mysqli_error($mysqli));

    $studiengaenge = $mysqli->query("SELECT * FROM studiengang");


?>