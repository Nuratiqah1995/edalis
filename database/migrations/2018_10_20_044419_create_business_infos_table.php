<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('address_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('company_type')->nullable();
            $table->string('category')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_field')->nullable();
            $table->string('capital')->nullable();
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
        Schema::dropIfExists('business_infos');
    }
}
