<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>

    <form action="/update/{{ $item->id }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ $item->name }}" required>
        <input type="text" name="description" value="{{ $item->description }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
