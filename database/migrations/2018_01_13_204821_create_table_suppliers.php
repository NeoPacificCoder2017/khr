<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('supplierOrders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number');
            $table->date('order_date');
            $table->date('delivery_date');
            $table->integer('supplier_id');

            $table->timestamps();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('supplierOrders');
    }
}
