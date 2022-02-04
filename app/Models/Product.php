<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     //テーブル名
     protected $table ='products';

     //可変項目
     protected $fillable = 
     [
        ['id'],
        ['company_id'],
        ['product_name',100],
        ['price'],
        ['stock'],
        ['comment']
     ];
}
