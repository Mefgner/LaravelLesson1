<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulár</title>
</head>
<body>

<form method="POST" action="/results">
    @csrf

    <p>
        <label>N:</label><br>
        <input type="number" name="ficount">
    </p>

    <button type="submit">Odoslať</button>
</form>

</body>
</html>