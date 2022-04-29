<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('bed_id')->constrained();
            $table->foreignId('clinic_id')->constrained();
            $table->foreignId('procedure_id')->constrained();          
            $table->timestamp('datetime_start');
            $table->timestamp('datetime_stop');
            $table->unsignedTinyInteger('week_day')->index();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('bookings');
    }
};
