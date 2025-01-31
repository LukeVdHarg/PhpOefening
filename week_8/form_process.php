<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST["username"]) || strlen($_POST["username"]) < 3 || strlen($_POST["username"]) > 15) {
        $errors[] = "Gebruikersnaam moet tussen de 3 en 15 tekens zijn.";
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Voer een geldig e-mailadres in.";
    }

    if (strlen($_POST["password"]) < 6) {
        $errors[] = "Wachtwoord moet minimaal 6 tekens lang zijn.";
    }

    if (empty($_POST["gender"])) {
        $errors[] = "Selecteer een geslacht.";
    }

    if (empty($_POST["country"])) {
        $errors[] = "Kies een land.";
    }

    if (empty($errors)) {
        $_SESSION["username"] = $_POST["username"];
        header("Location: register.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validatie Fouten</title>
</head>
<body>
    <h2>Validatie Fouten</h2>
    <?php
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="index.php">Probeer het opnieuw</a>
</body>
</html>
