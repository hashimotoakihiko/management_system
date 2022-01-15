<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;

    //テーブル名
    protected $table ='companies';

    //可変項目
    protected $fillable = 
    [
        ['id'],
        ['company_name',100],
        ['street_address']
    ];
}
