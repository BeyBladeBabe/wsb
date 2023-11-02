<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>UserTable</title>
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <td>Nazwa Urzytkownika</td>
            <td>Email</td>
            <td>Data stworzenia</td>
        <tr>
    </thead>
    <tbody>
    @foreach($user as $column)
        <tr>
            <td>{{$column -> name}}</td>
            <td>{{$column -> email}}</td>
            <td>{{$column -> created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table> 

<br>
<a href="AddHumanUser">Dodaj Użytkownika</a>

</body>
</html>