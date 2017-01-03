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
	public function getdelete($id){
		$allimages = DB::select("select * from hinhanh where MaSanPham Like '%$id%'");
		foreach ($allimages as $images ) 
			Storage::delete('images->HinhAnh');	
		DB::delete("delete from sanpham where MaSanPham Like '%$id%'");
		DB::delete("delete from hinhanh where MaSanPham Like '%$id%'");
		return redirect()->route('Pages.edit')->with(['flash_lavel'=>'alert alert-success','flash_message'=>'Xoa Thanh cong']);
	}
	public function geteditproduct($id){
		$allproduct=DB::select('select * from sanpham where MaSanPham=?',array($id));
		$allcategory = DB::select('select * from danhmuc');
		$allnation = DB::select('select * from thuonghieu');
		return view("pages.editproduct", ['allproduct' => $allproduct,'allcategory' => $allcategory,'allnation' => $allnation]);	
	}
	public function getedit(){
		$allproduct = DB::select('select * from sanpham ');
		return view("pages.edit", ['allproduct' => $allproduct]);
	}
	public function editaccount(){
		$s=Auth::user()->id;
		$allaccount = DB::select('select * from users where id <>? ',array($s));
		return view("pages.editaccount", ['allaccount' => $allaccount]);
	}
	public function getchangepassword(Request $request){

	return view("pages.changepassword");	
	}
	public function postchangepassword(){
		return redirect()->route('Pages.changepassword');
		
	}
	public function getadd(){
		$allcategory = DB::select('select * from danhmuc');
		$allnation = DB::select('select * from thuonghieu');
		return view("pages.add", ['allcategory' => $allcategory,'allnation' => $allnation]);	
		
	}

	public function postadd(Request $request){
		$allproduct = DB::select('select * from sanpham ');
		$s=0;
		$check=0;
		$fl='';
		$fm='';
		if($request->file('img')== null)
		{
			$fl='alert alert-danger';
			$fm='Vui lòng chọn file';
		}
		if($request->nat=='0')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng chọn quốc gia';
		}
		if($request->menu=='0')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập danh mục';
		}
		if($request->opt=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập chức nâng';
		}
		if($request->inf=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập thông tin';
		}
		if($request->pri=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập giá';
		}
		if($request->usr=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập tên';
		}
		if($fl<>'')
				return redirect()->route('Pages.getadd')->with(['flash_lavel'=>$fl,'flash_message'=>$fm]);
		
		foreach ($allproduct as $product ) 
		{
			$s=$s+1;
			$check=0;
			foreach ($allproduct as $product1 ) 
			if($s==$product1->MaSanPham) 
			{
				$check=1;
				break;
			}
			if($check==0) break;
		}
		if($check==1) $s=$s+1;
		$s=$s . $request->menu;
		$file_name=$request->file('img')->getClientOriginalName(); 
		$product= new sanpham();
		$product->MaSanPham=$s;
		$product->MaDanhMuc=$request->menu;
		$product->Ten=$request->usr;
		$product->Gia=$request->pri;
		$product->ThuongHieu=$request->nat;
		$product->ThongTin=$request->inf;
		$product->ChatLieu=$request->opt;
		$request->file('img')->move('images',$file_name);
		$product->save();
		$images= new hinhanh();
		$images->MaSanPham=$s;
		$images->HinhAnh="images/" . $file_name;
		$images->save();
	return redirect()->route('Pages.getadd')->with(['flash_lavel'=>'alert alert-success','flash_message'=>'Them thanh cong']);
	}	
	public function posteditproduct(Request $request,$id)
	{
		$fl='';
		$fm='';
		if($request->opt=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập chức năng mới';
		}
		if($request->inf=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập thông tin mới';
		}
		if($request->pri=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập giá mới';
		}
		if($request->usr=='')
		{
			$fl='alert alert-danger';
			$fm='Vui lòng nhập tên mới' ;
		}
		if($fl<>'')
				return redirect()->route('Pages.geteditproduct',[$id])->with(['flash_lavel'=>$fl,'flash_message'=>$fm]);

		$MaSanPham=$id;
		$product=sanpham::find($id);
		$product->MaDanhMuc=$request->menu;
		$product->Ten=$request->usr;
		$product->Gia=$request->pri;
		$product->ThuongHieu=$request->nat;
		$product->ThongTin=$request->inf;
		$product->ChatLieu=$request->opt;
		$product->save();
		return redirect()->route('Pages.edit',[$id])->with(['flash_lavel'=>'alert alert-success','flash_message'=>'Sua thanh cong']);
	}
	public function postedit(){
		$allproduct = DB::select('select * from sanpham ');
		return view("pages.edit", ['allproduct' => $allproduct]);
	}


    //
}
