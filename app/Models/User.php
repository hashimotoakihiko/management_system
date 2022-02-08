<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use  App\Models\User;

class User extends Model
{
    //※Model作成時に自動生成。
    use HasFactory;

    //テーブル名
    protected $table ='users';

    //可変項目
    protected $fillable = 
    [
        'id',
        'email',
        'password',
    ];

}
