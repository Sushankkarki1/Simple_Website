<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
</head>
<body>
    <h1>Item List</h1>

    <form action="/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <button type="submit">Add</button>
    </form>

    <table border="1" cellpadding="10">
        <tr>
            <th>#</th><th>Name</th><th>Description</th><th>Actions</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="/edit/{{ $item->id }}">Edit</a>
                <a href="/delete/{{ $item->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
