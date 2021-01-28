<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($osobas as $osoba )
        <li>
            {{ $osoba->Ime }} -- {{ $osoba->Prezime }} -- {{ $osoba->Mejl }}
            <form action="{{ route('osobas.destroy', $osoba->id)}}" method="POST">
                <a href="{{ route('osobas.edit', $osoba->id)}}">Edit</a>
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
    </ul>
</body>
</html>
