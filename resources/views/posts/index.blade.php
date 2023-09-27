<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css" >
</head>
<body>
    @foreach ($posts as $post)
        <a href='posts/{{ $post->id }}'>{{ $post->title }}</a>
        <p>{{ $post->body }}</p>
        <a href='posts/{{ $post->id }}/edit'>この投稿の編集</a><br><br>
    @endforeach
    <a href="/posts/create">記事の追加へ</a>
    {{ $posts->links() }}
</body>
</html>