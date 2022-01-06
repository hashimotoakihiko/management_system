<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Management_system extends Model
{
    //※Model作成時に自動生成。
    use HasFactory;

    //テーブル名
    protected $table ='users';

    //可変項目
    protected $fillable = 
    [
        ['id'],
        ['email'],
        ['password',100]
    ];
    
    //テーブル名
    protected $table ='companies';

    //可変項目
    protected $fillable = 
    [
        ['id'],
        ['company_name',100],
        ['street_address']
    ];

    // //テーブル名
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

    //テーブル名
    protected $table ='sales';

    //可変項目
    protected $fillable = 
    [
        ['id'],
        ['product_id']
    ];

}
