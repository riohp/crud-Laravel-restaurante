<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>

<body>
    <a href="{{route('index')}}">Volver</a>
    <h1>listado</h1>
    <form action="{{route('update', $note->id)}}" method="post">
        @method('put')
        @csrf
        <label>
            Titulo
        </label>
        <input type="text" name="title" value="{{$note->title}}">
        <label for="">Descripcion</label>
        <input type="text" name="description" value="{{$note->description}}">
        <input type="submit" value="update">
    </form>


</body>

</html>
