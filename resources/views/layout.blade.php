<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@foreach($navigation as $route => $title)
    <a href="{{ url($route) }}" class="text-sm text-gray-700 dark:text-gray-500 underline" @if (request()->is(substr($route, 1))) style="font-weight: bold" @endif>{{$title}}</a>
@endforeach
<br />
@yield("content")
</body>
</html>
