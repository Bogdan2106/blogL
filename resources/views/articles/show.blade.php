<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>

<h1> {{ $article->title }}</h1>

<p><i> {{ $article->description }}</i></p>
<p> {{ $article->content }}</p>
    {{--<ul>--}}
            {{--<li> {{ $article->title }}</li>--}}
    {{--</ul>--}}


</body>
</html>