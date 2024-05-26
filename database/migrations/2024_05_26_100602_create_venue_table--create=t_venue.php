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
        Schema::create('t_venue', function (Blueprint $table) {
            $table->id();
            $table->string('venue_id')->nullable();
            $table->string('venueName')->nullable();
            $table->string('venueStreetAddress')->nullable();
            $table->string('venueTown')->nullable();
            $table->integer('venuePostcode')->nullable();
            $table->string('venueCity')->nullable();
            $table->string('venueInfo')->nullable();
            $table->float('venuePrice')->nullable();
            $table->string('venueSize')->nullable();
            $table->string('venueFeatures')->nullable();
            $table->time('venueOperatingHours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_venue');
    }
};
