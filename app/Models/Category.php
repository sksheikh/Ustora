<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug'
    ];

    public static function createOrUpdateCategory($request,$id=null)
    {
        Category::updateOrcreate(['id'=>$id],[
            'name'=>$request->name,
            'slug'=>strtolower(str_replace(' ','-', $request->name)),
        ]);
    }
}
