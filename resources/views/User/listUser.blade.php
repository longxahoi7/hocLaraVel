<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div>
   <h1>List User</h1>
   <a href="{{route('user.add-users')}}"><button class="btn btn-primary">Thêm mới</button></a>
   <table border="1" class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Tên đơn vị</th>
            <th>Tuổi</th>
            <th>Hành động</th>
        </tr>
        <tbody>
            @foreach ($listUser as $item )
            <!-- object thì dùng ['']và dấu ngoặc kép
            array thì trỏ sang.Dưới đây là 1 object -->
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->ten_donvi}}</td>
                <td>{{$item->tuoi}}</td>
                
                <td><a href="{{route('user.removeUser',$item->id)}}"><button class="btn btn-danger">Xóa</button></a>
                <a href="{{route('user.detailUser',$item->id)}}"><button class="btn btn-success">Sửa</button></a>
            </td>
            </tr>
            @endforeach 
        </tbody>
    </thead>
   </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
