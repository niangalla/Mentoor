<?php

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
            $table->string('lastName');
            $table->string('firstName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('phone_number');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('photo_location');
            $table->string('type');
            $table->string('cv_location')->nullable();
            $table->integer('ratings')->nullable();
            $table->string('opinion')->nullable();
            $table->boolean('availability')->default(true);
            $table->unsignedBigInteger('id_mentor');
            $table->foreign('id_mentor')->references('id')->on('users');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
