<html lang="de">
<?php include("studiengaenge.verarbeiten.php");?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Studiengänge</title>
</head>
<body>
<?php include("navbar.php");?>
<div class="container">
<h2>Studiengänge</h2>
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
        <?php if ($neuerStudiengang): ?>
        <tr>
            <form action="studiengaenge.php" method="POST">
                <td><input type="text" name="name"></td>
                <td><input type="text" name="kurzform"></td>
                <td><input type="number" name="studienzeit"></td>
                <td><input class="btn btn-primary" type="submit" name="speichern" value="Hinzufügen"></td>
            </form>
        </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <?php if (!$neuerStudiengang): ?>
    <a href="studiengaenge.php?neu" class="btn btn-primary">Neuer Studiengang</a>
    <?php endif; ?>
</div>
<?php include("footer.php");?>

</body>
</html>