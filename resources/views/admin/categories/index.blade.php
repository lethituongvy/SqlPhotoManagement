<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">INSERT</form>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        @foreach($cate as $data)
        <tr>
            <td>{{$data -> name}}</td>
            <td>
                <form action="{{'/admin/categories/'.$data->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">DELETE</button>
                </form>
            </td>
            <td>
                <form action="{{'/admin/categories/'.$data->id.'/edit'}}">
                    <button type="submit">EDIT</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>