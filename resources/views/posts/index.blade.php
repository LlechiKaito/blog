<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css" >
    <script>
        function buttonOnClick ()
        {
            var answer = confirm("本当に削除しますか。");
            if ( answer ){
                const inputDeleteElement = document.createElement("input");
                inputDeleteElement.setAttribute("style", "hidden");
                inputDeleteElement.setAttribute("type", "submit");
                const formElement = document.getElementById("deleteForm");
                formElement.appendChild(inputDeleteElement);
                inputDeleteElement.click();
            }
        }
    </script>
</head>
<body>
    @foreach ($posts as $post)
        <a href='posts/{{ $post->id }}'>{{ $post->title }}</a>
        <p>{{ $post->body }}</p>
        <a href='posts/{{ $post->id }}/edit'>この投稿の編集</a><br><br>
        <button onclick="buttonOnClick()">削除</button>
        <form action="/posts/{{ $post->id }}" method="POST" id="deleteForm" style="hidden">
            @csrf
            @method('DELETE')
            <!--form.submitでよかったらしい-->
        </form>
    @endforeach
    <a href="/posts/create">記事の追加へ</a>
    {{ $posts->links() }}
    
    
</body>
</html>