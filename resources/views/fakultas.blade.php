<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
          <th>fakultas</th>
        </tr>

        @foreach($modelFakultas as $item)
        <tr>
            <td>{{$item->fastikom}}</td>
            <td>{{$tarbiyah}}</td>
            <td>{{$ekonomi}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>