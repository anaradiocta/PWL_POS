<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <h1>Welcome to Our Homepage</h1>
    <h2>Owner Anaradi Octa Lavechia</h2>
    <p>Please choose a menu below:</p>

    <div class="menu">
        <a href="{{ route('products.categoryList') }}">Products</a><br>
        <a href="{{ route('sales.index') }}">Sales</a><br>
        <a href="{{ route('user.profile', ['id' => 1, 'name' => 'JohnDoe']) }}">User</a>
    </div>

</body>
</html>
