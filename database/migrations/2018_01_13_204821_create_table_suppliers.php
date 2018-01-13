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
        Schema::crate('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('last_name');
            $table->varchar('first_name');
            $table->varchar('e-mail');
            $table->integer('celphone');
            $table->integer('validated')->default(2);
            $table->integer('validated_by')->default(0);

            $table->timestamps();
        })

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
        Schema::dropIfExists('suppliers');
        
    }
}
