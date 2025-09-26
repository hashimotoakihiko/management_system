<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Companie;

class Product extends Model
{
      use HasFactory;

      //テーブル名
      protected $table ='products';

      //可変項目
      protected $fillable = 
      [
         'id',
         'company_id',
         'product_name',
         'price',
         'stock',
         'comment',
         'image_path'  // 画像パスを追加
      ];

        /**
     * 検索処理
     */

      Public function getList()
      {
         $products = Product::select([
               'products.id',
               'companies.company_name',
               'products.company_id',
               'products.product_name',
               'products.price',
               'products.stock',
               'products.comment'
         ])
         // ->sortable()
         ->from('products')
         ->leftJoin('companies', 'products.company_id', 'companies.id')
         ->get();
         return $products;
      } 

      /**
     * 一覧画面表示用にテーブルから全てのデータを取得
     */

      Public function findAllProducts()
      {
            // dd($products);

            return Product::all();
      }

      /**
     * 登録処理
     */
      public function InsertProduct($request)
      {
            // リクエストデータを基に管理マスターユーザーに登録する
            return $this->create([
                  'product_name' => $request->product_name,
                  'id'           => $request->id,
                  'company_id'   => $request->company_id,
                  'price'        => $request->price,
                  'stock'        => $request->stock,
                  'comment'      => $request->comment
            ])
            // ->sortable()
            ->from('products')
            ->leftJoin('companies', 'products.company_id', 'companies.id')
            ->get();
            return $products;
      }

      /**
     * 更新処理
     */
      public function updateProduct($request, $product)
      {
            $result = $product->fill([
            'product_name' => $request->product_name,
            'id'           => $request->id,
            'company_id'   => $request->company_id,
            'price'        => $request->price,
            'stock'        => $request->stock,
            'comment'      => $request->comment
            ])->save();

            return $result;
      }
            
      public function companie()
      {
            return $this->belongsTo(Companie::class);
      }

      // Public function getDetail()
      // {
      //    // productsテーブルの全てのレコードを取得します
      //    // モデル名は命名のルールとして頭文字が大文字になっています
      //    // viewのファイルまでのパスは以下の設定です
      //    // プロジェクト¥resources¥views¥user¥index.blade.php
      //    // return view の引数にはビューが格納されているフォルダ名と
      //    // viewのファイル名を拡張子などを省略して記述します
      //    // withメソッドはビューへ変数の情報を個別で渡すことができます
      //    // 開くviewに対して -> withメソッドで変数情報を渡します。
      //    // withメソッドの引数は次のようになります
      //    // ('viewファイルで使いたい変数の名前','$テーブル情報を代入した変数')
            
      //    $products = Product::select([
      //          'products.id',
      //          'companies.company_name',
      //          'products.company_id',
      //          'products.product_name',
      //          'products.price',
      //          'products.stock',
      //          'products.comment'
      //    ])
      //    // ->sortable()
      //    ->from('products')
      //    ->leftJoin('companies', 'products.company_id', 'companies.id')
      //    ->get();
      //    // dd($products);
      //    return $products;
         
      // }
      
}

        
        
     
     

