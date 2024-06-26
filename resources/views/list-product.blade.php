<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
   <h1>Xin chao cac ban</h1>
   <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <tbody>
            @foreach ($products as $item )
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['price']}}</td>
            </tr>
            @endforeach 
        </tbody>
    </thead>
   </table>
</div>
</body>
</html>
