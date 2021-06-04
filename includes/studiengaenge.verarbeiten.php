<?php
require_once 'db.php';                
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

    if (isset($_GET["neu"])) {
        $neuerStudiengang = true;
    }

    if (isset($_POST["speichern"])) {
        $name = $_POST["name"];
        $kurzform = $_POST["kurzform"];
        $regelstudienzeit = $_POST["studienzeit"];

        $mysqli->query(
            "INSERT INTO
            studiengang (name, kurzform, regelstudienzeit)
            VALUES('$name', '$kurzform', '$regelstudienzeit')")
            or die ($mysqli->error);
    }

    if (isset($_GET["bearbeiten"])) {
        $bearbeiteStudiengang = true;

        $id = $_GET['bearbeiten'];

        $studiengang = $mysqli->query(
            "SELECT * FROM studiengang WHERE id='$id'"
        ) or die($mysqli->error);
    
        $row = $studiengang->fetch_array();
        $name = $row["name"];
        $kurzform = $row["kurzform"];
        $regelstudienzeit = $row["regelstudienzeit"];
    }
    if (isset($_POST["bearbeiten"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $kurzform = $_POST["kurzform"];
        $regelstudienzeit = $_POST["studienzeit"];

        $mysqli->query(
            "UPDATE studiengang SET 
            name='$name',
            kurzform='$kurzform',
            regelstudienzeit='$regelstudienzeit'
            WHERE id='$id'") or die($mysqli->error);
    }

    $studiengaenge = $mysqli->query("SELECT * FROM studiengang");
?>