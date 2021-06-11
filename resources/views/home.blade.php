<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista dei film</h1>
    
    <ul>
        @foreach($movies as $movie)
            <li> 
                <div>Title: {{$movie->title}}</div>
                <div>Original title: {{$movie->original_title}}</div>
                <div>Nationality: {{$movie->nationality}}</div>
            </li>
        @endforeach    
    </ul>

</body>
</html>