<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Room;
use App\Models\Bed;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beds', function (Blueprint $table) {
            $table->id();
            $table->string('no',20)->index();
            $table->string('type',20)->default('large');
            $table->foreignId('room_id')->constrained();
            $table->timestamps();
        });

        $room = Room::find(1);
        Bed::create(['no' => '1', 'type'=>'large', 'room_id' => $room->id]);
        Bed::create(['no' => '2', 'type'=>'large', 'room_id' => $room->id]);
        Bed::create(['no' => '3', 'type'=>'large', 'room_id' => $room->id]);
        Bed::create(['no' => '4', 'type'=>'large', 'room_id' => $room->id]);

        $room = Room::find(2);
        Bed::create(['no' => '1', 'type'=>'large', 'room_id' => $room->id]);
        Bed::create(['no' => '2', 'type'=>'large', 'room_id' => $room->id]);
        Bed::create(['no' => '3', 'type'=>'small', 'room_id' => $room->id]);
        Bed::create(['no' => '4', 'type'=>'small', 'room_id' => $room->id]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Beds');
    }
};
