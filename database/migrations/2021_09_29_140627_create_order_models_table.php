<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('price');
            $table->string('studentname');
            $table->string('email');
            $table->string('phone');
            $table->string('school');
            $table->string('class');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('postcode')->nullable();
            $table->string('status');
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_models');
    }
}
