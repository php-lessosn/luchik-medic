<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Categories</h1>
@foreach ($categories as $category)
    <li><a href="/admin/category/{{ $category->id }}/edit">{{ $category->id }} - {{ $category->title }}</a></li>
@endforeach
</body>
</html>
