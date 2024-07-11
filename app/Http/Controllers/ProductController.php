<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function showProduct(Request $request)
    {
        // $products = [
        //     [
        //         'id' => '1',
        //         'name' => "Iphone 11",
        //         'price' => '10000000'
        //     ],
        //     [
        //         'id' => '2',
        //         'name' => "Iphone 19",
        //         'price' => '122222222'
        //     ]
        // ];
        // return view('list-product')->with([
        //     'products' => $products
        // ]);
        //1
        // $result=DB::table('users')->get();
        // $result=DB::table('users')->where('id','=',4)->first();
        //    $result=DB::table('users')->where('id','=',16)->value('name');
        //    $result1=DB::table('phongban')->where('ten_donvi','like','Ban giám hiệu')->value('id');
        // $result=DB::table('users')->where('phongban_id','=',$result1)->pluck('id');
        // $result=DB::table('users') ->where('tuoi','=',DB::table('users') ->max('tuoi'))->get();
       
        // $result=DB::table('users')->where('tuoi',DB::table('users')->min('tuoi'))->get();
        // $result1=DB::table('phongban')->where('ten_donvi','like','Ban giám hiệu')->value('id');
        // $result=DB::table('users')->where('phongban_id','=',$result1)->count('id');
        //  $result=DB::table('users')->distinct()->pluck('tuoi');
        // $result=DB::table('users')->where('name','like','%Khải')->orwhere('name','like','%Thanh')->get();
        // $result1=DB::table('phongban')->where('ten_donvi','like','Ban đào tạo')->value('id');
        // $result=DB::table('users')->where('phongban_id','=',$result1)->get();
        //  $result=DB::table('users')->where('tuoi','>=','30')->orderBy('tuoi','asc')->get();
            //  $result=DB::table('users')->orderBy('tuoi','desc')->limit(10)->offset(5)->get();
            // dd($result);
        //      $data=[
        //         'name' => 'Hoàng Long',
        //         'email' => 'long@gmail.com',
        //         'phongban_id'=>'1',
        //         'songaynghi'=>'0',
        //         'tuoi'=>'5',
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now()
        //      ];
        //      //13
        //    DB::table('users')->insert($data);
           //15
        //    DB::table('users')->where('songaynghi','>','15')->delete();
        // $result1=DB::table('phongban')->where('ten_donvi','like','Ban đào tạo')->value('id');
        // $listUsser=DB::table('users')->where('phongban_id','=',$result1)->get();
        // foreach($listUsser as $value){
        //     DB::table('users')->where('id','=','value->id')->update([
        //         "name"=>$value->name.'PĐT'
        //     ]);
        //     dd($value)
        
       
    }
    // public function getProduct($id)
    // {
    //     echo $id;
    // }
    // public function updateProduct(Request $request)
    // {
    //     echo $request->id . "</br>";
    //     echo $request->name;
    // }
}
