<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Edit: {{ $product->title }}</h1>
<form method="POST" action="/admin/product/{{ $product->id }}">
    @method("PUT")
    @csrf()
    <h5>{{ $product->category->title }}</h5>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                @if ($category->id === $product->category->id)
                    selected="selected"
                @endif
            >{{ $category->title }}</option>
        @endforeach
    </select>
    <input type="text" name="title" value="{{ $product->title }}"/>
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
