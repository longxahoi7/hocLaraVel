<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers()
    {
        $list = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id', )
            ->select('users.id', 'users.name', 'users.email', 'phongban.ten_donvi', 'users.tuoi')->get();
        return view('User.listUser')->with([
            'listUser' => $list,
        ]);
    }
    public function createUser()
    {
        $phongban = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('User.createUser')->with(['phongban' => $phongban]);
    }
    public function addUsers(Request $request)
    {
        $data = [
            'name' =>$request->name ,//->$post['name']
            'email' => $request->email ,
            'phongban_id' => $request->phongban_id ,
            'tuoi' => $request->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
DB::table('users')->insert($data);
return redirect()->route('user.list-user');
    }
    public function removeUsers($id){
DB::table('users')->where('id',$id)->delete();
return redirect()->route('user.list-user');
    }
    public function detailUsers($id){
       $user=DB::table('users')->select('id','name','email','phongban_id','tuoi')->where('id',$id)->first();
       $phongban=DB::table('phongban')->select('id','ten_donvi')->get();
       return view('user.detailUser')->with([
        'user'=>$user,
            'phongban'=>$phongban,
        ]);

    }
    public function updateUsers(Request $request){
        $data = [
            'name' =>$request->name ,//->$post['name']
            'email' => $request->email ,
            'phongban_id' => $request->phongban_id ,
            'tuoi' => $request->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
 $thanhcong=DB::table('users')->where('id',$request->id)->update($data);
 if($thanhcong){
    return redirect()->route('user.list-user');
 }

    }
}
