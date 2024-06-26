<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LongController extends Controller
{
    public function nguyenHoangLong(){
        $thongtin=["Nguyễn Hoàng Long","25/07/2003",21,"Hà Nội","Sinh viên ngành công nghệ thông tin","Backend"];
        return view('NguyenHoangLong')->with(['thongtin'=>$thongtin]);
    }
}
