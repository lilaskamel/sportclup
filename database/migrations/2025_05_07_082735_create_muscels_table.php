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
        Schema::create('muscels', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['neck', 'chest','shoulders','legs','trysepce','bysepce','stomach','back','forearm','caleves']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mucels');
    }
};
