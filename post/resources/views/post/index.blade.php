<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body> 
    <h1>Show all Posts</h1>
    <ul>
        @foreach ($posts as $value)
            <li>
                {{$value ->title}}
            </li>
            <p>{{$value ->description}}</p>
        @endforeach

    </ul>
    
</body>
</html>