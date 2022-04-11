<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail for Join approval</title>
</head>
<body>
    <h1>{{$join['title']}}</h1>
    <p>{{$join['body']}}</p>
    <p>{{$join['line']}}<a href="{{route('My.Joined.Plan.List')}}">here</a></p>
    <p>Thank You</p>
</body>
</html>