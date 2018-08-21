<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id',16);
            $table->string('product_name',256);
            $table->string('product_name_search',256);
            $table->text('product_img',500);
            $table->text('product_price',128);
            $table->text('sp_intro');
            $table->text('sp_design');
            $table->text('sp_technologi');
            $table->text('sp_action');
            $table->text('sp_protected');
            $table->text('sp_engine');
            $table->string('sp_list_img',256);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
