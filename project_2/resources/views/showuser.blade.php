<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownik</title>
</head>
<body>
    <h3>Dane użytkownika</h3>
    Imię i nazwisko: {{$firstName}} {{$lastName}}<br>
    Email: {{$email}}<hr>
    {{print_r($_GET)}}
</body>
</html>