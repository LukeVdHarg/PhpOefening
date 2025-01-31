<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
</head>
<body>
    <h2>Welkom</h2>

    <?php
    if (isset($_SESSION['username'])) {
        echo "<p>Welkom, " . htmlspecialchars($_SESSION['username']) . "!</p>";
    } else {
        echo "<p>U moet zich registreren.</p>";
    }
    ?>
</body>
</html>
