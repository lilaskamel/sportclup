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
        Schema::create('paids', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->decimal('price');
            $table->integer('duration');
            $table->timestamps();
             $table->foreignId('subscribtion_id')->constrained('subscribtions');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paids');
    }
};
