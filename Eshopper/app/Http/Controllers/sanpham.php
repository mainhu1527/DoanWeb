<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='sanpham';
    protected $fillable = ['MaSanPham','MaDanhMuc', 'Ten', 'Gia','ThongTin','ChatLieu','ThuongHieu'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
