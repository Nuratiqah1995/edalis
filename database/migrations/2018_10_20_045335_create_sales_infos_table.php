<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->integer('type')->default(1)->comment("1. Weeks, 2. Years");
            $table->integer('market_target');
            $table->double('modal',10,2)->nullable();
            $table->double('sales',10,2)->nullable();
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
        Schema::dropIfExists('sales_infos');
    }
}
