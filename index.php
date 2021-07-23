<html lang="de">
<?php include("verarbeiten.php");?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Studentenliste</title>

</head>
<body>
<?php include("navbar.php");?>
<div class="container">
    <h1>Studentenliste</h1>
        <table class="table">
        <thead>
            <tr>
                <?php $reihenfolge == 'DESC' ? $reihenfolge = 'ASC' : $reihenfolge = 'DESC';  ?>
                <th><a href="<?= "index.php?sortiere=id&&reihenfolge=$reihenfolge" ?>">#</a></th>
                <th><a href="<?= "index.php?sortiere=vorname&&reihenfolge=$reihenfolge" ?>">Vorname</a></th>
                <th><a href="<?= "index.php?sortiere=nachname&&reihenfolge=$reihenfolge" ?>">Nachname</a></th>
                <th><a href="<?= "index.php?sortiere=semester&&reihenfolge=$reihenfolge" ?>">Semester</a></th>
                <th><a href="<?= "index.php?sortiere=studiengang_id&&reihenfolge=$reihenfolge" ?>">Studiengang</a></th>
                <th><a href="<?= "index.php?sortiere=geburtstag&&reihenfolge=$reihenfolge" ?>">Geburtstag</a></th>
                <th><a href="<?= "index.php?sortiere=matrikelnummer&&reihenfolge=$reihenfolge" ?>">Matrikelnummer</a></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?=count($ergebnis->fetch_assoc());?>
        <?php while ($row = $ergebnis -> fetch_assoc()):?>
            <tr>
                <th><?=$row["id"]?></th>
                <td><?=$row["vorname"]?></td>
                <td><?=$row["nachname"]?></td>
                <td><?=$row["semester"]?></td>
                <td><?=$row["name"]?></td>
                <td><?=$row["geburtstag"]?></td>
                <td><?=$row["matrikelnummer"]?></td>
                <td>
                    <a href="index.php?loeschen=<?=$row['id']?>" class="btn btn-danger">Löschen</a>
                    <a href="neu.php?bearbeiten=<?=$row['id']?>" class="btn btn-info">Bearbeiten</a>
                </td>
            </tr>
            <?php endwhile;?>

        </tbody>
        </table>
        <a href="neu.php" class="btn btn-primary">Neuer Student</a>
</div>
<?php include("footer.php")?>
</body>
</html>