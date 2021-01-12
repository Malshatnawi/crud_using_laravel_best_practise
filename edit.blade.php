<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route ('citizens.update' , $citizen)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="citizen_name" placeholder="Name" value="{{$citizen->citizen_name}}">
    <input type="text" name="citizen_city" placeholder="City" value="{{$citizen->citizen_city}}">
    <input type="submit" value="submit">
    </form>
    
</body>
</html>