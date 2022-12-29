<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Helper;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'category_id',
        'brand_id',
        'price',
        'description',
        'image',
        'status',
    ];

    public static function createOrUpdateProduct($request,$id=null)
    {
        Product::updateOrcreate(['id'=>$id],[
            'name' =>$request->name,
            'category_id' =>$request->category_id,
            'brand_id' =>$request->brand_id,
            'price'=>$request->price,
            'description' =>$request->description,
            'image' =>Helper::fileUpload($request->file('image'),'product'),
            'status' =>$request->status,
        ]);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
