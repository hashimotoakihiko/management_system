<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sales', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        if (!Schema::hasTable('sales')) {
            Schema::create('sales', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->integer('product_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
