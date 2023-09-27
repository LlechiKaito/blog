<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/posts" method="POST">
        @csrf
        <div>
            <label>タイトル</label>
            <input type="text" name="post[title]" placefolder="タイトル">
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        <div>
            <label>本文</label>
            <textarea name="post[body]" placeholder="本文"></textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <input type="submit" value="送信">
    </form>
    <a href="/">戻る</a>
</body>
</html>