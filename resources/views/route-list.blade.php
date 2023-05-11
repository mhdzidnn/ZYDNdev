<!DOCTYPE html>
<html>
<head>
    <title>Route List</title>
</head>
<body>
    <h1>Route List</h1>

    <table>
        <thead>
            <tr>
                <th>URI</th>
                <th>Method</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($routes as $route)
                <tr>
                    <td>{{ $route->uri }}</td>
                    <td>{{ implode('|', $route->methods) }}</td>
                    <td>{{ $route->getName() }}</td>
                    <td>{{ $route->getActionName() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
