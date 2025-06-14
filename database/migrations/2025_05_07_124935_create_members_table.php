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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->text('note');
            $table->text('descreption');
            $table->boolean('isblocked');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('coach_id')->nullable()->constrained('coaches')->cascadeOnDelete();
            $table->integer('numberofsub')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
