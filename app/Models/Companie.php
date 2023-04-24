<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Companie extends Model
{
    use HasFactory;

    //テーブル名
    protected $table ='companies';

    //可変項目
    protected $fillable = 
    [
        'id',
        'company_name',
        'street_address'
    ];

    // public function products() {
    //     return $this->belongsTo('App\Models\Product');
    // }
    
    // public function products() {
    //     // return $this->hasMany(Product::class,another_id);
    //     return $this->hasMany(Product::class);

    // }

}
