<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$article->title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div>
        <h1>{{$article->title}}</h1>
        <a href="/articles/{{$article->id}}/edit">Edit</a>

        <p>{{$article->content}}</p>

    </div>
</body>

</html>