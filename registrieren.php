<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registrieren</title>
</head>
<body>
    <div class="container">
        <h1>Registrieren</h1>
        <form action="includes/registrieren.verarbeiten.php" method="POST">
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
        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" name="registrieren" class="btn btn-primary">Registrieren</button>
        </form>
    </div>
</body>
</html>