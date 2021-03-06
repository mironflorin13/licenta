<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentist_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dentist_id');
            $table->string('servicename');
            $table->decimal('price',8,0)->nullable();
            $table->timestamps();
            
            $table->index('dentist_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentist_services');
    }
}
