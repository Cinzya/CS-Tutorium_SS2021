<?php
    $mysqli = new mysqli("localhost", "root", "", "studentenliste") or die(mysqli_error($mysqli));
                
    $neuerStudiengang = false;
    $bearbeiteStudiengang = false;

    $id = "";
    $name = "";
    $kurzform = "";
    $regelstudienzeit = "";

    if (isset($_GET["loeschen"])){
        $id = $_GET["loeschen"];
        $mysqli->query("DELETE FROM studiengang WHERE id=$id")
        or die($mysqli->error);
    }
    
    $studiengaenge = $mysqli->query("SELECT * FROM studiengang");
?>