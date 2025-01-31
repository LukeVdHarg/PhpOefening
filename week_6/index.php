<?php
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Naam is vereist.";
    } elseif (strlen($_POST["name"]) < 3) {
        $nameErr = "De naam moet minimaal 3 tekens zijn.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is vereist.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Bericht is vereist.";
    } elseif (strlen($_POST["message"]) < 10) {
        $messageErr = "Het bericht moet minimaal 10 tekens zijn.";
    } else {
        $message = htmlspecialchars($_POST["message"]);
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>
        <span><?php echo $nameErr; ?></span><br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
        <span><?php echo $emailErr; ?></span><br><br>

        <label for="message">Bericht:</label><br>
        <textarea id="message" name="message" rows="4" required><?php echo $message; ?></textarea><br>
        <span><?php echo $messageErr; ?></span><br><br>

        <input type="submit" value="Verzenden">
    </form>

    <?php
    
    if (empty($nameErr) && empty($emailErr) && empty($messageErr) && $_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Ingezonden Gegevens:</h3>";
        echo "<p>Naam: " . $name . "</p>";
        echo "<p>E-mailadres: " . $email . "</p>";
        echo "<p>Bericht: " . $message . "</p>";
    }
    ?>
</body>
</html>
