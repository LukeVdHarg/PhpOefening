<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>
</head>
<body>
    <h2>Registratieformulier</h2>
    <form action="form_process.php" method="post">
        <label for="username">Gebruikersnaam (minimaal 3 en maximaal 15 tekens):</label><br>
        <input type="text" id="username" name="username" minlength="3" maxlength="15" required><br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Wachtwoord (minimaal 6 tekens):</label><br>
        <input type="password" id="password" name="password" minlength="6" required><br><br>

        <label>Geslacht:</label><br>
        <input type="radio" id="man" name="gender" value="man" required> Man
        <input type="radio" id="vrouw" name="gender" value="vrouw" required> Vrouw<br><br>

        <label for="country">Land:</label><br>
        <select id="country" name="country" required>
            <option value="">Kies een land</option>
            <option value="Nederland">Nederland</option>
            <option value="België">België</option>
            <option value="Duitsland">Duitsland</option>
            <option value="Frankrijk">Frankrijk</option>
        </select><br><br>

        <input type="submit" value="Verzenden">
    </form>
</body>
</html>

