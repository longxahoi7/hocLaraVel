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
        <h1>Form Add product</h1>
        <form action="{{route('product.postProducts')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="user" class="form-label">Tên Product</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" >
            </div>
            <div class="mb-3">
                <label for="view" class="form-label">View</label>
                <input type="text" class="form-control" id="view" name="view" >
            </div>
            <div class="mb-3">
                <select id="" name="category_id">
                    @foreach ($category as $value)
                        <option value="{{$value->id}}">{{$value->nameC}}</option>
                    @endforeach
                </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button type="submit" onclick="" class="btn btn-warning">Quay lại</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>