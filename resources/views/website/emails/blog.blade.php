<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail for Join approval</title>
</head>
<body>
    <h1>{{$blog['title']}}</h1>
    <p>{{$blog['body']}}</p>
    <p>{{$blog['line']}} <a href="{{route('My.blog.List')}}">here</a></p>
    <p>Thank You</p>
</body>
</html>