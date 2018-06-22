<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HEROES</title>
    </head>
    <body>
        <h1>Characters</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Game</th>
                <th>Description</th>
            </tr>
            @foreach ($characters as $character)
            <tr>
                <td>{{ $character->name }}</td>
                <td>{{ $character->game->name }}</td>
                <td>{{ $character->desc }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>