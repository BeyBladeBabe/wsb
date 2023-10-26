<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CarTable</title>
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Brand</td>
            <td>Model</td>
            <td>Capacity</td>
        <tr>
    </thead>
    <tbody>
    @foreach($car as $column)
        <tr>
            <td>{{$column -> id}}</td>
            <td>{{$column -> brand}}</td>
            <td>{{$column -> model}}</td>
            <td>{{$column -> capacity}}</td>
        </tr>
    @endforeach
    </tbody>
</table> 
    
{{ $car->links('pagination::bootstrap-5') }}
<a href="AddUser">Dodaj Użytkownika</a>

</body>
</html>