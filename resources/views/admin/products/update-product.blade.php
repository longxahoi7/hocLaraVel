@extends('admin.layouts.default')
@section('content')
<form action="{{route('admin.products.updatePostProduct',$product->product_id)}}" enctype="multipart/form-data" method="post">
@method('patch')
@csrf  
<div class="mb-3">
    <h4>Chi tiết sản phẩm</h4>
    <label  class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control"  name="name" value="{{$product->name}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Gía sản phẩm</label>
    <input type="text" class="form-control" name="price" value="{{$product->price}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Anh sản phẩm</label>
    <img src="{{asset($product->images)}}" alt="">
    <input type="file" class="form-control"  name="images" >
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here"  name="description" id="description" style="height: 100px"></textarea>
  <label for="floatingTextarea2">{{$product->description}}</label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection