<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSupplierOrderLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suppplier_id');
            $table->integer('supplier_order_id');
            $table->integer('produit_id');
            $table->integer('qty');
            $table->date('date');
            $table->time('time');
            
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
        //
    }
}
