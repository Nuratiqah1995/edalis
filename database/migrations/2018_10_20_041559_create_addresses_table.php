<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id')->nullable();
            $table->integer('type')->default(1)->comment("1. User Address, 2. Father Address, 3 Mother Address, 4 Business Address");
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state');
            $table->integer('postcode');
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
        Schema::dropIfExists('addresses');
    }
}
