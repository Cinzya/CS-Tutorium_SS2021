<html lang="de">
<?php include("verarbeiten.php");?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Studenliste</title>
</head>
<body>

    <h1 class="text-center">Neuer Student:</h1>
    <div class="row justify-content-center">
        <form action="index.php" method="POST" class="col-5">
            <div class="mb-3">
                <label class="form-label">Vorname:</label>
                <input class="form-control" type="text" value="<?=$vorname?>" name="vorname" placeholder="Gib den Vorname an" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nachname:</label>
                <input class="form-control" type="text" value="<?=$nachname?>" name="nachname" placeholder="Gib den Nachname an" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Semester:</label>
                <input class="form-control" type="number" value="<?=$semester?>" name="semester" placeholder="Gib das Semester an" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Matrikelnummer:</label>
                <input class="form-control" type="number" value="<?=$matrikelnummer?>" name="mnummer" placeholder="Gib die Matrikelnummer an" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Studiengang:</label>
                <input class="form-control" type="text" value="<?=$studiengang?>" name="studiengang" placeholder="Gib den Studiengang an" required>
            </div>
            <div class="mb-3">
                <label for="date">Geburtstag:</label>
                <input class="form-control" type="date" value="<?=$geburtstag?>" name="geburtstag">
            </div>

    <?php 
        if($bearbeiten):?>
                <input class="btn btn-primary" type="submit" name="bearbeiten" value="Bearbeiten"> 
        <?php else:?>
                <input class="btn btn-primary" type="submit" name="speichern" value="Hinzufügen">
                
    <?php endif;?>

        </form>
    </div>

</body>
</html>