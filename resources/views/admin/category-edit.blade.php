<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Edit: {{ $category->title }}</h1>
<form method="POST" action="/admin/category/{{ $category->id }}">
    @method("PUT")
    @csrf()
    <input type="text" name="title" value="{{ $category->title }}"/>
    <button type="submit">Update</button>
</form>
@if ($errors->any())
    <hr />
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
