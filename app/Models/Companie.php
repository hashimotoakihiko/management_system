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

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    Public function getsearch()
    {
        $companies = Companie::select([
            'id',
            'company_name',
            'street_address'
        ])
        // ->sortable()
        ->get();
        return $companies;
    } 

// public function getCompany() {
//     $getCompanyName = Company::pluck('company_name', 'id');
//     return $getCompanyName;
//     }

}
