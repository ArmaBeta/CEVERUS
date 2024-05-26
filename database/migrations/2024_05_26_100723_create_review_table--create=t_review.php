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
        Schema::create('t_review', function (Blueprint $table) {
            $table->id();
            $table->string('review_id')->nullable();
            $table->string('reviewContent')->nullable();
            $table->date('reviewDate')->nullable();
            $table->float('reviewRating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_review');
    }
};
