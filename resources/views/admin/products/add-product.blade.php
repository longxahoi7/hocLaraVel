@extends('admin.layouts.default')
@section('content')
<form action="{{route('admin.products.addPro')}}" enctype="multipart/form-data" method="post">
@csrf  
<div class="mb-3">
    <label  class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control"  name="name">
  </div>
  <div class="mb-3">
    <label  class="form-label">Gía sản phẩm</label>
    <input type="text" class="form-control" name="price" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Anh sản phẩm</label>
    <input type="file" class="form-control"  name="images" >
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection