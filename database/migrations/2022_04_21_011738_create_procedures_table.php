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
        //ตารางหัตถการ
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            // $table->string('clinic_code', 6); //รหัสคลินิก
            // $table->string('clinic_code', 6); //รหัสคลินิก
            // $table->string('idproced',4); //รหัสหัตถการ
            $table->string('name'); //ชื่อหัตถการ
            $table->foreignId('clinic_id')->constrained();
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
        Schema::dropIfExists('procedures');
    }
};
