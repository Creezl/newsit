<!DOCTYPE html>
<html lang="ru">
    <table class=tt>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/site/stily.css">
    <title>Таблица Учеников</title>
    
    <h1><center>Таблица Учеников</center></h1>
<tr class=t>
    <th class=t>id</th>
    <th class=t>ФИО</th>
    <th class=t>Возраст</th>
    <th class=t>Дата рождения</th>
</tr>
</head>
<body>
    @foreach($posts as $post)
    <tr class=t>
    <td class=t>{{$post->id}}</td>
    <td class=t>{{$post->имя}}</td>
    <td class=t>{{$post->возраст}}</td>
    <td class=t>{{$post->дата_рождения}}</td>
</tr>
@endforeach
</body>
</table>
</html>