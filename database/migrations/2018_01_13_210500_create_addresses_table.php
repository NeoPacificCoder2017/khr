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

            $table->integer('user_id');
            $table->text('shipping');
            $table->text('billing');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('company_name');
            $table->text('adress_line_1');
            $table->text('adress_line_2');
            $table->integer('island_id');
            $table->integer('city_id');
            $table->string('telephone');
            $table->string('email');

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
