<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{$article->id}}">
                    {{ $article->title }}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>