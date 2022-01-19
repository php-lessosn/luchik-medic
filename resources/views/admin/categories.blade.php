<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Categories</h1>
@foreach ($categories as $category)
    <li>{{ $category->id }} - {{ $category->title }}</li>
@endforeach
</form>
</form>
</body>
</html>
