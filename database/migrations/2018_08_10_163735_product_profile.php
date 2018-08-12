<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_profile', function (Blueprint $table) {
            $table->increments('id',16);
            $table->integer('product_profile_product_id');
            $table->string('product_profile_machine',1000)->nullable($value = true);
            $table->string('product_profile_size',1000)->nullable($value = true);
            $table->string('product_profile_protected',1000)->nullable($value = true);
            $table->string('product_profile_outside',1000)->nullable($value = true);
            $table->string('product_profile_inside',1000)->nullable($value = true);
            $table->string('product_profile_convenient',1000)->nullable($value = true);
            $table->string('product_profile_color_outside',1000)->nullable($value = true);
            $table->string('product_profile_price',1000)->nullable($value = true);
            $table->timestamps();
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
