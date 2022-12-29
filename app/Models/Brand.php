<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'status'
    ];


    public static function createOrUpdateBrand($request,$id=null)
    {
        Brand::updateOrCreate(['id'=>$id],[
            'name' =>$request->name,
            'slug' =>strtolower(str_replace(' ', '-', $request->name)),
            'status' =>$request->status,
        ]);
    }
}
