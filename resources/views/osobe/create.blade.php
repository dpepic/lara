<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('osobas.store')}}">
        <div>
            <b>Ime:</b>
            <input type="text" name="Ime"/>
        </div>
        <div>
            <b>Prezime:</b>
            <input type="text" name="Prezime"/>
        </div>
        <div>
            <b>Mejl:</b>
            <input type="text" name="Mejl"/>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
