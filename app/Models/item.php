<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $guarded =[
        'id','created_at'
    ];
    public function brand(){
        return $this -> hasOne(brand::class,"id", "brand_id");
    }
    public function category(){
        return $this -> hasOne(category::class,"id","category_id");
    }
}
