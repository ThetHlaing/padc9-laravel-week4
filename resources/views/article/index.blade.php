<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div>
        <h1>List of articles</h1>

        @foreach($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
        <p>
            {{$article->except}}</p>
        @endforeach
    </div>
</body>

</html>