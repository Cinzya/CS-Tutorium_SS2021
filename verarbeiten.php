<?php
    $mysqli = new mysqli("localhost", "root", "", "studentenliste") or die(mysqli_error($mysqli));

    $bearbeiten = false;


    if(isset($_POST["speichern"])){
        $vorname = $_POST["vorname"];
        $nachname = $_POST["nachname"];
        $semester = $_POST["semester"];
        $studiengang = $_POST["studiengang"];
        $matrikelnummer = $_POST["mnummer"];
        $geburtstag = $_POST["geburtstag"];

        $mysqli->query(
            "INSERT INTO
            student (vorname, nachname, semester, studiengang, geburtstag, matrikelnummer)
            VALUES('$vorname', '$nachname', '$semester', '$studiengang', '$geburtstag', '$matrikelnummer')")
            or die ($mysqli->error);
    }


            
    if (isset($_GET["loeschen"])){
        $id = $_GET["loeschen"];
        $mysqli->query("DELETE FROM student WHERE id=$id")
        or die($mysqli->error);
    }

    $vorname = "";
    $nachname = "";
    $semester = "";
    $studiengang = "";
    $matrikelnummer = "";
    $geburtstag = "";
    $id = "";

    if (isset($_GET['bearbeiten'])) {
        $id = $_GET['bearbeiten'];
        $bearbeiten = true;

        $student = $mysqli->query("SELECT * FROM student WHERE id=$id")
        or die($mysqli->error);

        $row = $student->fetch_array();
        $vorname = $row["vorname"];
        $nachname = $row["nachname"];
        $semester = $row["semester"];
        $studiengang = $row["studiengang"];
        $matrikelnummer = $row["matrikelnummer"];
        $geburtstag = $row["geburtstag"];
    }


    $ergebnis = $mysqli->query("SELECT * FROM student") or die ($mysqli->error);

?>