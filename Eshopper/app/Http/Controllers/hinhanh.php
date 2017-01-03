<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table='hinhanh';
    protected $fillable = ['MSP','HinhAnh'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
