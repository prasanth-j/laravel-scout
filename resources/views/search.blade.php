<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    @foreach ($posts as $post)
    <h5>{{ $post->title }}</h5>
    <small>{{ $post->category }}</small>
    <p>{{ $post->body }}</p>
    <hr>
    @endforeach
</body>

</html>