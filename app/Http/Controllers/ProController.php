<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProController extends Controller
{
    public function listProducts(Request $request)
    {
       if(isset($request->btn)){
        $list = DB::table('product')
        ->join('category', 'product.category_id', '=', 'category.id')
        ->select('product.id','product.name', 'product.price', 'product.view', 'category.nameC')
        ->where('product.name','like','%'.$request->nhap.'%')
        ->orderBy('product.view', 'desc')->get();
       }else{
        $list = DB::table('product')
        ->join('category', 'product.category_id', '=', 'category.id')
        ->select('product.id','product.name', 'product.price', 'product.view', 'category.nameC')
        ->orderBy('product.view', 'desc')->get();
       }
      
            return view("product.list-product")->with(['product' => $list]);
    }
    public function createProducts()
    {
        $category = DB::table('category')->select('id', 'nameC')->get();
        return view('product.add-product')->with(['category' => $category]);
    }
    public function addProducts(Request $request)
    {
        $data = [
            'name' => $request->name,//->$post['name']
            'price' => $request->price,
            'category_id' => $request->category_id,
            'view' => $request->view,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table('product')->insert($data);
        return redirect()->route('product.listProducts');
    }
    public function deleteProducts($id)
    {
        DB::table('product')->where('id', $id)->delete();
        return redirect()->route('product.listProducts');
    }
    public function detailProducts($id)
    {
        $product = DB::table('product')->where('id', $id)->first();
        $category = DB::table('category')->get();
        return view('product.detail-product')->with([
            'product' => $product,
            'category' => $category
        ]);
    }
    public function updateProduct(Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'view' => $request->view,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table('product')->where('id',$request->id)->update($data);
     
        return redirect()->route('product.listProducts');
    }
}
