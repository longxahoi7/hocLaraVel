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
    <h1>Danh sách sản phẩm</h1>
  
    <a href="{{route('product.addProducts')}}"><button class="btn btn-primary mb-5">Add prodcut</button></a>
   
   <form action="" mehtod="post">
   <h3>Tìm kếm sản phẩm theo tên</h3>
   <input type="text" class="form-control mb-3" name="nhap" placeholder="Search" >
   <input type="submit" class="btn btn-primary mb-3" name="btn" value="Go">
   </form>
    <table border="1" class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Tên danh mục</th>
            <th>View</th>
        </tr>
        <tbody>
            @foreach ($product as $item )
            <tr>
                <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->nameC}}</td>
                <td>{{$item->view}}</td>
                <td>
                <a href="{{route('product.removePro',$item->id)}}"><button class="btn btn-danger">Xóa</button></a>
                <a href="{{route('product.detailProducts',$item->id)}}"><button class="btn btn-success">Sửa</button></a>
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
