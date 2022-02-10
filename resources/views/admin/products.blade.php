<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Products</h1>
@foreach ($products as $product)
    <li><a href="/admin/product/{{ $product->id }}/edit">{{ $product->id }} - {{ $product->title }}</a></li>
@endforeach
</body>
</html>
