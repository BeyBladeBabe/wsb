<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie Użytkownika</title>
</head>
<body>
    <h3>Dodawanie Użytkownika</h3>
    <form action="AddUser" method="post">
@csrf
        <input type="text" name="brand" placeholder="Podaj markę" autofocus> <br><br>
        <input type="text" name="model" placeholder="Podaj model"> <br><br>
        <input type="number" name="capacity" placeholder="Podaj pojemność"> <br><br>
        <input type="submit" value="Dodaj samochód">
</body>
</html>