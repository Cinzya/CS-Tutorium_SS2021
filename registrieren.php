<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registrieren</title>
</head>
<body>
    <h1 class="text-center">Registrieren</h1>
    <div class="row justify-content-center">
        <form action="includes/registrieren.verarbeiten.php" method="POST" class="col-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-Mail-Addresse</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Passwort</label>
            <input type="password" name="passwort" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Passwort wiederholen</label>
            <input type="password" name="passwortWiederholung" class="form-control" id="exampleInputPassword2" required>
        </div>
        <button type="submit" name="registrieren" class="btn btn-primary">Registrieren</button>
        </form>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "ungueltigerUName") {
                    echo "<p class='text-center text-danger'>Username ungültig!</p>";
                } else if ($_GET["error"] == "ungueltigesPwt") {
                    echo "<p class='text-center text-danger'>Passwörter stimmen nicht überein!</p>";
                } else if ($_GET["error"] == "UExistiert") {
                    echo "<p class='text-center text-danger'>Der Username / E-Mail ist bereits in Verwendung!</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='text-center text-danger'>Etwas ist schiefgelaufen :( Versuche es später erneut.</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p class='text-center text-success'>Account erfolgreich angelegt!</p>";
                }
            }
        ?>
    </div>
</body>
</html>