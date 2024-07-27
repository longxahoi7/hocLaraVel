<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    //
    public function listProduct()
    {
        $listPro = Product::paginate(5);
        return view('admin.products.list-product')->with([
            "listPro" => $listPro
        ]);
    }
    public function formProduct()
    {
        return view('admin.products.add-product');
    }
    public function addProduct(Request $request)
    {
        $linkImage = null;
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $newName = time() . "." . $image->getClientOriginalExtension();//$image->getClientOriginalExtension là đuôi file
            $image->move(public_path('imageProduct/'), $newName);
            $linkImage = 'imageProduct/' . $newName;
        }
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'images' => $linkImage,
            'description' => $request->description,
        ];
        Product::create($data);
        return redirect()->route('admin.products.listProduct')->with([
            'message' =>
                'Thêm thành công'
        ]);

    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        
        if ($product->images != null) {
            File::delete(public_path($product->images));//Xóa ảnh
        }
        $product->delete();
        return redirect()->route('admin.products.listProduct')->with(['message' => 'Xóa thành công']);
    }
    public function updateProduct($id){
        $product=Product::find($id);
        return view('admin.products.update-product')->with(['product' => $product]);
    }
    public function updatePostProduct( Request $request,$id){
        
    }
}
