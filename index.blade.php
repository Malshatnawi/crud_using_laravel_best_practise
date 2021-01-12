<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="citizens/create"><button>Create A New Citizen</button></a>
    <table border="1">
    <thead>
    <th>id</th>
    <th>name</th>
    <th>city</th>
    <th>edit</th>
    <th>delete</th>
    </thead>
    <tbody>
    @foreach($citizens as $key => $value)
    <tr>
    <td>{{$value->id}}</td>
    <td>{{$value->citizen_name}}</td>
    <td>{{$value->citizen_city}}</td>
    <td><a href="{{route('citizens.edit', $value->id) }}"> <button class="btn btn-primary">Edit</button></a></td>
    <td>
    <form action="{{route('citizens.destroy', $value->id)}}" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-danger" value="submit">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>