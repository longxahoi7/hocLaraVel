
   @extends('admin.layouts.Default')
@section('title')
@parent
Danh sách sản phẩm
@endsection
@push('style')
img{
    width:100%
    hei ght:120px
}
@endpush
@section('content')
   <!-- Main -->
   <div class="p-4" style="min-height: 800px;">
                    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
                  <a href="{{route('admin.products.formAdd')}}">  <button class="btn btn-info">Thêm mới</button></a>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Anh</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                       @foreach ( $listPro as $key => $value )
                       <tr $key1="{{$value->product_id}}">
                                <th scope="row">{{ $key +1 }}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->price}}</td>
                                <td><img class="img-product" src="{{asset($value->images)}}" alt=""></td>
                                <td>
                                  {{$value->description}}
                                </td>
                                <td>
                                <a href="{{route('admin.products.updateProduct',$value->product_id)}}"> <button class="btn btn-warning" >Sửa</button></a>
                                   <form action="{{route('admin.products.deleteProduct',
                                   $value->product_id)}}" method="post">
                                   @method('delete')
                                   @csrf
                                   <button onclick=" return confirm('Bạn có muốn xóa ko?')" class="btn btn-danger">Xóa</button>
                                   </form>
                                </td>
                            </tr>
                       
                       @endforeach
                     
                        </tbody>
                    </table>
                    {{$listPro->links('pagination::bootstrap-5')}};
                </div>
@endsection
@endextends



