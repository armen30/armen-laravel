<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="container" style="background-color: green; position: relative">
<div class="container-fluid">
    @include('includes.message')
    <div style="display: flex; justify-content: right">
        <form action="/logout" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
    </div>
    <form action="/cars" method="POST" style="display: flex;justify-content: center;">
        @csrf
        <input type="name" name="brand" placeholder="Brand">
        <input type="name" name="color" placeholder="Color">
        <input type="number" name="price" placeholder="Price">
        <input type="submit" value="Save">
    </form>
</div>

</body>
</html>
