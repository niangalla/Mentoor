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
        Schema::create('supervisions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('starting_date');
            $table->string('state');
            $table->string('mentoring_type');
            $table->string('mentoring_place');
            $table->float('price');
            $table->string('approximate_duration');
            $table->foreignIdFor(User::class);
            $table->unsignedBigInteger('id_mentor');
            $table->foreign('id_mentor')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisions');
    }
};
