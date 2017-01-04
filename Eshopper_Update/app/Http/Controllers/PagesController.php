<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Htpp\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
class PagesController extends Controller
{
	public function index(){
		$allcategory = DB::select('select * from danhmuc');
		return view("pages.index", ['allcategory' => $allcategory]);
	}
	public function product(){
		$allcategory = DB::select('select * from danhmuc');
		return view("pages.product", ['allcategory' => $allcategory]);
	}
	public function product2($id){
		$allcategory = DB::select('select * from danhmuc where MaDanhMuc=?',array($id));
		return view("pages.product", ['allcategory' => $allcategory]);
	}
	public function preview($id){
		$product = DB::select('select * from sanpham where MaSanPham=?',array($id));
		foreach ($product as $pr ) 	
		$allcategory = DB::select('select * from danhmuc where MaDanhMuc=?',array($pr->MaDanhMuc));
		return view("pages.preview", ['products' => $product,'allcategory' => $allcategory]);
	}
	public function search(){
		$allcategory = DB::select('select * from danhmuc');
		$allnation = DB::select('select * from thuonghieu');
		return view("pages.search", ['allcategory' => $allcategory,'allnation' => $allnation]);	
	}
	public function getchangepassword(Request $request){

	return view("pages.changepassword");	
	}
	public function postchangepassword(){
		return redirect()->route('Pages.changepassword');
		
	}

    //
}
