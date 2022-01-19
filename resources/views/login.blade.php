<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST">
    @csrf()
    <input name="email" type="text"/>
    <input name="password" type="password" />
    <button type="submit">Login</button>

    @if ($errors->any())
        <hr />
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif
</form>
</form>
</body>
</html>
