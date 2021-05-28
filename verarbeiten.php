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
            student (vorname, nachname, semester, studiengang_id, geburtstag, matrikelnummer)
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

        $student = $mysqli->query(
            "SELECT student.*, studiengang.name
            FROM student LEFT JOIN studiengang
            ON student.studiengang_id=studiengang.id
            WHERE student.id=$id ")
        or die($mysqli->error);

        $row = $student->fetch_array();
        $vorname = $row["vorname"];
        $nachname = $row["nachname"];
        $semester = $row["semester"];
        $studiengang = $row["studiengang_id"];
        $matrikelnummer = $row["matrikelnummer"];
        $geburtstag = $row["geburtstag"];
    }

    if (isset($_POST['bearbeiten'])) {
        $id = $_POST['id'];
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $semester = $_POST['semester'];
        $studiengang = $_POST['studiengang'];
        $matrikelnummer = $_POST['mnummer'];
        $geburtstag = $_POST['geburtstag'];

        $mysqli->query(
            "UPDATE student SET
            vorname='$vorname',
            nachname='$nachname',
            semester='$semester',
            studiengang_id='$studiengang',
            geburtstag='$geburtstag',
            matrikelnummer='$matrikelnummer'
            WHERE id='$id'") or die($mysqli->error);
    }


    $ergebnis = $mysqli->query(
        "SELECT student.*, studiengang.name FROM student
        LEFT JOIN studiengang
        ON student.studiengang_id=studiengang.id"
        ) or die ($mysqli->error);

?>