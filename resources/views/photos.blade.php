<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <button> INSERT</button>
    </form>
    <table border="1px">
        <tr>
            <th>title</th>
            <th>category_id</th>
            <th>image</th>
            <th>DELETE</th>
            <th>EDIT</th>
        </tr>
        @foreach($photo as $hienthi)
        <tr>
            <td>{{$hienthi -> title}}</td>
            <td>{{$hienthi->category_id}}</td>
            <td><img src="{{'/storage/'. $hienthi->image }}" alt=""></td>
            <th>
                <form action="">
                    <button>DELETE</button>
                </form>
            </th>
            <th>
                <form action="">
                    <button>EDIT</button> 
                </form>
            </th>
        </tr>
        @endforeach
    </table>
</body>

</html>