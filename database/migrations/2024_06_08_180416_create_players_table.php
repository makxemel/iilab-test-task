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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('middle_name', 255);
            $table->string('last_name', 255);
            $table->date('birth_date');
            $table->string('photo')->nullable();
            $table->unsignedTinyInteger('raiting')->nullable();

            $table->foreignId('position_id')->index()->constrained('positions')->onDelete('cascade');
            $table->foreignId('club_id')->index()->constrained('clubs')->onDelete('cascade');
            $table->foreignId('country_id')->index()->constrained('cities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
