<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Clinic;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('code', 6)->default('0000'); //รหัสคลินิก
            $table->string('name')->unique(); //ชื่อคลินิก
            $table->timestamps();
        });

        Clinic::create(['name' => 'โรคภูมิแพ้', 'code' => '0573']);
        Clinic::create(['name' => 'โรคผิวหนัง', 'code' => '0574']);
        Clinic::create(['name' => 'โรคโภชนาการ', 'code' => '0575']);
        Clinic::create(['name' => 'โรคต่อมไร้ท่อ', 'code' => '0576']);
        Clinic::create(['name' => 'โรคพันธุศาสตร์', 'code' => '0577']);
        Clinic::create(['name' => 'โรคข้อ', 'code' => '0585']);
        Clinic::create(['name' => 'โรคไต', 'code' => '0585']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
};
