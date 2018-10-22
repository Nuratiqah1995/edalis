<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            // $table->string('address_id')->nullable();s
            $table->integer('type')->default(1)->comment("1. Father Name, 2. Mother Name");
            $table->string('name');
            $table->integer('phone_no');
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
        Schema::dropIfExists('parent_informations');
    }
}
