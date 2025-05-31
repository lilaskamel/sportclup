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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->text('note');
            $table->text('description');
            $table->string('machineName');
            $table->string('machineImage');
            $table->string('video');
            
            $table->string('machineName1')->nullable();
            $table->string('machineImage1')->nullable();
            $table->string('video1');
            $table->foreignId('muscel_id')->constrained('muscels')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
