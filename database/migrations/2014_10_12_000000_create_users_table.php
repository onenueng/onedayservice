<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('sap_id',10); // sap id
            $table->string('user_name')->unique(); //AD username
            $table->string('full_name'); //ชื่อ-สกุล
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'sap_id' => '12345678',
            'user_name' => 'Amin.gg',
            'full_name' => 'Admin GG',
            'password' => \Hash::make('secret'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
