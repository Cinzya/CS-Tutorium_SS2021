<?php 

function ungueltigeUName($username) {
    $ergebnis;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $ergebnis = true;
    } else {
        $ergebnis = false;
    }
    return $ergebnis;
}

function pwtPassen($pwt, $pwtWdh) {
    $ergebnis;
    if ($pwt !== $pwtWdh) {
        $ergebnis = true;
    } else {
        $ergebnis = false;
    }
    return $ergebnis;
}

function UNameExistiert($mysqli, $username, $email) {
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($mysqli);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registrieren.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $daten = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($daten)) {
        return $row;
    } else {
        $ergebnis = false;
        return $ergebnis;
    }

    mysqli_stmt_close($stmt);
}

function erstelleUser($mysqli, $username, $email, $passwort) {
    $sql = "INSERT INTO user (username, email, passwort) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($mysqli);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registrieren.php?error=stmtfailed");
        exit();
    }

    $hashedPwt = password_hash($passwort, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwt);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registrieren.php?error=none");
    exit();
}

?>