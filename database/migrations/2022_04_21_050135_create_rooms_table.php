<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Room;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name_short', 125);   //ชื่อย่อ
            $table->string('name'); //ชื่อห้อง
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Room::create(['name_short' => 'ห้อง treatment จฟ.1','name' => 'ห้อง treatment ตึกเจ้าฟ้ามหาจักรี ชั้น 1', 'active' => true]);
        Room::create(['name_short' => 'ห้องทำทดสอบ จฟ.7', 'name' => 'ห้องทำทดสอบ ตึกเจ้าฟ้ามหาจักรี ชั้น 7', 'active' => true]);
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
