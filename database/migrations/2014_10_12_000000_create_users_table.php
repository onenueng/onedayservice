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
            $table->string('username')->unique(); //AD username
            $table->string('full_name'); //ชื่อ-สกุล
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'sap_id' => '12345678',
            'username' => 'admin.gg',
            'full_name' => 'admin GG',
            'admin' => true,
            'password' => \Hash::make('secret'),
        ]);

        User::create([
            'sap_id' => '12345679',
            'username' => 'admin.ms',
            'full_name' => 'admin MS',
            'admin' => true,
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
