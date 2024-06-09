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
        Schema::create('club_player', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->index()->constrained('clubs')->onDelete('cascade');
            $table->foreignId('player_id')->index()->constrained('players')->onDelete('cascade');
            $table->date('join_date');
            $table->date('left_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_player');
    }
};
