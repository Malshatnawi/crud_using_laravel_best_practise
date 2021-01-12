<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('citizens.store')}}" method="post">
    @csrf
    <input type="text" name="citizen_name" placeholder="Name">
    <input type="text" name="citizen_city" placeholder="City">
    <input type="submit" value="submit">
    </form>
</body>
</html>