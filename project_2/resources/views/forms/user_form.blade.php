<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownik</title>
</head>
<body>
    <h3>Dane Użytkownika</h3>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="UserFormController" method="get">
        <input type="text" name="firstName" placeholder="Podaj imię" autofocus><br><br>
        <input type="text" name="lastName" placeholder="Podaj nazwisko" autofocus><br><br>
        <input type="email" name="email" placeholder="Podaj email" autofocus><br><br>
        <input type="submit" value="Zatwierdź">
</body>
</html>