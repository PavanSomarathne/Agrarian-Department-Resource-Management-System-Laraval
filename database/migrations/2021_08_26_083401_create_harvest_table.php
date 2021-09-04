<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarvestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvest_products', function (Blueprint $table) {
            $table->id();
            $table->string('harvest_name');
            $table->string('harvest_quantity');
            $table->string('harvest_phone');
            $table->string('harvest_price');
            $table->string('harvest_selling_type');
            $table->string('harvest_description');
            $table->string('harvest_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harvest_products');
    }
}
