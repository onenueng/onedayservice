<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Clinic;
use App\Models\Procedure;


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

        $allergy = Clinic::where('name', 'โรคภูมิแพ้')->first();
        Procedure::create(['name' => 'ทดสอบการแพ้ยา', 'clinic_id' => $allergy->id]);
        Procedure::create(['name' => 'ทดสอบแพ้อาหาร (OFC)', 'clinic_id' => $allergy->id]);
        Procedure::create(['name' => 'ทดสอบแพ้อาหาร (SOTI)', 'clinic_id' => $allergy->id]);
        Procedure::create(['name' => 'Skin Pick Test', 'clinic_id' => $allergy->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $allergy->id]);
       // Procedure::create(['name' => 'Other', 'clinic_id' => $allergy->id]);

        $skin = Clinic::where('name', 'โรคผิวหนัง')->first();
        Procedure::create(['name' => 'Biopsy', 'clinic_id' => $skin->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $skin->id]);
        
        $nutrition = Clinic::where('name', 'โรคโภชนาการ')->first();
        Procedure::create(['name' => 'OGTT', 'clinic_id' => $nutrition->id]);
        Procedure::create(['name' => 'การตรวจเมตาบอลิสมของร่างกาย โดยการวัดจากค่าคาร์บอร์ไดออกไซด์', 'clinic_id' => $nutrition->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $nutrition->id]);

        $endrocrin = Clinic::where('name', 'โรคต่อมไร้ท่อ')->first();
        Procedure::create(['name' => '1 mcg ACTH', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => '250 mcg ACTH', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'ITT', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'Clonidine', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'Glucagon', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'L-Dopa', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'OGTT test', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'OGTT for GH', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'GnRH', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'ให้ยา Zoledronic', 'clinic_id' => $endrocrin->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $endrocrin->id]);

        $genetic = Clinic::where('name', 'โรคพันธุศาสตร์')->first();
        Procedure::create(['name' => 'ให้ enzyme', 'clinic_id' => $genetic->id]);
        Procedure::create(['name' => 'Biopsy', 'clinic_id' => $genetic->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $genetic->id]);

        $rheumato = Clinic::where('name', 'โรคข้อ')->first();
        Procedure::create(['name' => 'ให้ยา Tocilizumab Infliximab Rituximab', 'clinic_id' => $rheumato->id]);
        Procedure::create(['name' => 'เจาะข้อ/ฉีดข้อ', 'clinic_id' => $rheumato->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $rheumato->id]);

        $nephrology = Clinic::where('name', 'โรคไต')->first();
        Procedure::create(['name' => 'Biopsy', 'clinic_id' => $nephrology->id]);
        Procedure::create(['name' => 'ให้ยา IVCY', 'clinic_id' => $nephrology->id]);
        Procedure::create(['name' => 'Follow up', 'clinic_id' => $nephrology->id]);

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
