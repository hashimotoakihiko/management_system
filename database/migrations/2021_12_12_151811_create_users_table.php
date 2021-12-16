<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if (!Schema::hasTable('management_system')) {

            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->text('email');
                $table->string('password',100);
                $table->created_at();
                $table->updated_at();
            });

            Schema::create('companies', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('company_name',100);
                $table->text('street_address');
                $table->created_at();
                $table->updated_at();
            });

            Schema::create('products', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->integer('company_id');
                $table->string('product_name',100);
                $table->integer('price');
                $table->integer('stock');
                $table->text('comment');
                $table->created_at();
                $table->updated_at();
            });
            
            Schema::create('sales', function (Blueprint $table) {
                // $table->id();
                $table->bigIncrements('id');
                $table->timestamps();
                $table->integer('product_id');
                $table->created_at();
                $table->updated_at();
            });
        // }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
