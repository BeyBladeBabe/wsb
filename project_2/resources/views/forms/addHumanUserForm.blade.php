<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie Użytkownika</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h3>Dodawanie Użytkownika</h3>
    <form action="AddHumanUser" method="post">
@csrf
        <input type="text" name="name" placeholder="Podaj Imię" autofocus> <br><br>
        <input type="text" name="email" placeholder="Podaj email"> <br><br>
        <input type="text" name="email_validate" placeholder="Powtórz email"> <br><br>
        <input type="text" name="password" placeholder="Podaj hasło"> <br><br>
        <input type="text" name="password_validate" placeholder="Powtórz hasło"> <br><br>
        <input type="submit" value="Dodaj użytkownika">
</body>
</html>