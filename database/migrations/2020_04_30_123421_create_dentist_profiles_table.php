<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentist_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dentist_id');
            $table->text('description')->nullable();
            $table->String('location')->nullable();
            $table->String('name')->nullable();
            $table->text('address')->nullable();
            $table->string('schedule_m_f')->nullable();
            $table->string('schedule_sat')->nullable();
            $table->string('schedule_sun')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('dentist_profiles');
    }
}
