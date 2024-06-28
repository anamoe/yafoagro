<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('username');
            $table->string('email');
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('token_reset')->nullable();
            // $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name'=>'Admin YAFOARGO',
            'email'=>'admin@gmail.com',
            'username'=>'admin',
            'password'=>bcrypt(123),
            'role'=>'admin'

        ]);
        User::create([
            'name'=>'Mitra',
            'email'=>'mitra@gmail.com',
            'username'=>'mitra',
            'password'=>bcrypt(123),
            'role'=>'mitra'

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
