<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Список постов</h1>
    <ul>
        <li><a href="{{route('posts.show', ['post'=>1])}}">Post 1</a>|</li>
        <li><a href="{{route('posts.edit', ['post'=>1])}}">Edit 1</a>|</li>
        <form action="{{route('posts.destroy',['post'=>1])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
        <li><a href="{{route('posts.show', ['post'=>2])}}">Post 2</a>|</li>
        <li><a href="{{route('posts.edit', ['post'=>2])}}">Edit 2</a>|</li>
        <form action="{{route('posts.destroy',['post'=>2])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
        <li><a href="{{route('posts.show', ['post'=>3])}}">Post 3</a>|</li>
        <li><a href="{{route('posts.edit', ['post'=>3])}}">Edit 3</a>|</li>
        <form action="{{route('posts.destroy',['post'=>3])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    </ul>
</body>
</html>
