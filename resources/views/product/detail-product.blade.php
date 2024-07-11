<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>Form Edit product</h1>    
      <form action="{{route('product.updateProduct',$product->id)}}" method="post"> 
            @csrf
            <input type="hidden" class="form-control" id="name" name="id" value="{{$product->id}}" >
            <div class="mb-3">
                <label for="product" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" >
            </div>
            <div class="mb-3">
                <select id="" name="category_id">
                    @foreach ($category as $value)

                        <option
                        value="{{$value->id}}"
                        @if ($product->category_id==$value->id)selected  @endif 
                         >{{$value->nameC}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="view" class="form-label">View</label>
                <input type="text" class="form-control" id="view" name="view" value="{{$product->view}}" >
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>