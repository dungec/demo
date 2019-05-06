<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\giasu_user;
use Illuminate\Support\Facades\DB;
use Auth;
class MyController extends Controller
{

    public function home()
    {
    	return view('master');
    }
    public function getdkgs(){
    	return view('dkgs');
    }
    public function postdkgs(Request $request){
        $giasu=new giasu_user;
        $sogs=DB::table('giasu_user')->count();
        $khuvuc=implode("_", $request->khuvuc);
        $mon=implode("_", $request->mon);
        $lop=implode("_", $request->lop);
        $time=implode("_", $request->time);
        $this->validate($request,[
            'hoten'=>'required|min:3',
            'email'=>'required|unique:giasu_user,email'
        ],[
            'hoten.required'=>"Chua nhap ho ten",
            'hoten.min'=>'Ten qua ngan',
            'email.required'=>'Chua nhap email',
            'email.unique'=>'Email da duoc su dung'
        ]);
        $giasu->name=$request->hoten;
        $giasu->ngaysinh=$request->ngay;
        $giasu->nguyenquan=$request->que;
        $giasu->diachi=$request->diachi;
        $giasu->socmt=$request->cmt;
        $giasu->email=$request->email;
        $giasu->sdt=$request->sdt;
        $giasu->password=bcrypt($request->password);
        $giasu->khuvuc=$khuvuc;
        $giasu->monday=$mon;
        $giasu->lopday=$lop;
        $giasu->thoigianday=$time;
        return dd(giasu->thoigianday);
        if($sogs<DB::table('giasu_user')->count())
           {    
                $id=DB::table('giasu_user')->where('email','=',$request->email)->value('id');
                $s=($request->file('ImageUpload')->getClientMimeType('ImageUpload') );
                $str=(substr($s,6));
                if($request->hasFile('ImageUpload')){
                    $request->file('ImageUpload')->move('images/giasu',$id.'.'.$str);
                }
                $thongbao='Dang ky thanh cong';
                return view('master',['data'=>$thongbao ]);
            }
        else
        return "That bai";
    }
    public function getdangnhap(){
        return view('dngs');
    }
    public function postdangnhap(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        return 1;
    }
    public function dangxuat(){
        Auth::guard('giasu_user')->logout();
        return view('dngs');
    }
    public function danhsachlop(){
        return view('danhsachlop');
    }
}
