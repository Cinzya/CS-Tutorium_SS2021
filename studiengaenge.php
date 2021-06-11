<html lang="de">
<?php include("studiengaenge.verarbeiten.php");?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Studiegänge</title>
</head>
<body>
<?php include("navbar.php");?>
<div class="container">
    <h1>Studiengänge</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Studiengang</th>
                <th>Kurzform</th>
                <th>Regelstudienzeit</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $studiengaenge->fetch_assoc()):?>
            <tr>
                <td><?=$row["name"]?></td>
                <td><?=$row["kurzform"]?></td>
                <td><?=$row["regelstudienzeit"]?> Semester</td>
                <td>
                    <a href="studiengaenge.php?loeschen=<?=$row['id']?>" class="btn btn-danger">Löschen</a>
                    <a href="studiengaenge.php?bearbeiten=<?=$row['id']?>" class="btn btn-info">Bearbeiten</a>
                </td>
            </tr>
        <?php endwhile;?>
        <?php if ($neuerStudiengang || $bearbeiteStudiengang): ?>
            <tr>
            <form action="studiengaenge.php" method="POST">
                <input type="hidden" name="id" value="<?=$id?>">
                <td><input type="text" name="name" value="<?=$name?>"></td>
                <td><input type="text" name="kurzform" value="<?=$kurzform?>"></td>
                <td><input type="number" name="studienzeit" value="<?=$regelstudienzeit?>"></td>
                <?php if ($neuerStudiengang): ?>
                    <td><input type="submit" name="speichern" value="Hinzufügen" class="btn btn-primary"></td>
                <?php endif; ?>
                <?php if ($bearbeiteStudiengang): ?>
                    <td><input type="submit" name="aktualisieren" value="Speichern" class="btn btn-primary"></td>
                <?php endif; ?>
            </form>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <a href="studiengaenge.php?neu" class="btn btn-primary">Neuer Studiengang</a>
</div>
    <?php include("footer.php")?>
</body>
</html>