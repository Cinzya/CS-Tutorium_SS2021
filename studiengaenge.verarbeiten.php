<?php
    $mysqli = new mysqli("localhost", "root", "", "studentenliste") or die(mysqli_error($mysqli));

    $neuerStudiengang = false;

    if (isset($_GET["neu"])) {
        $neuerStudiengang = true;
    }
    
    if (isset($_POST["speichern"])) {
        $name = $_POST["name"];
        $kurzform = $_POST["kurzform"];
        $regelstudienzeit = $_POST["studienzeit"];

        $mysqli->query(
            "INSERT INTO studiengang (name, kurzform, regelstudienzeit)
            VALUES ('$name', '$kurzform', '$regelstudienzeit')")
            or die ($mysqli->error);
    }

    if (isset($_GET["loeschen"])) {
        $id = $_GET["loeschen"];
        $mysqli->query("DELETE FROM studiengang WHERE id=$id")
        or die($mysqli->error);
    }

    $studiengaenge = $mysqli->query("SELECT * FROM studiengang");
?>