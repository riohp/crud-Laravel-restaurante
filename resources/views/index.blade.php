<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('create')}}">Crear nueva nota</a>
    <h1>listado</h1>
    <ul>
        @forelse($notes as $note)

            <li>
                {{$note->title}}

                <a href="{{route('show', $note->id)}}">Ver</a>
                <a href="{{route('edit', $note->id)}}">Editar</a>
                <a href="{{route('destroy', $note->id)}}">Eliminar</a>

                <form action="{{route('destroy', $note->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form> 

            </li>
        @empty
            <li>No hay notas</li>
        @endforelse     
    </ul>
</body>
</html>