<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @foreach ($videogames as $videogame)
        <h2>{{ $videogame->name }}</h2>
        <h2>{{ $videogame->genre }}</h2>
        <h2>{{ $videogame->relase_date }}</h2>
    @endforeach

</body>

</html>
