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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
             $table->string('image2');
             $table->string('image3');
            $table->text('description');
            $table->enum( 'type',  ['sports', 'diet'])->nullable();
            $table->enum( 'level',  ['b', 'm' ,'a'])->nullable();
            $table->foreignId('member_id')->constrained('members');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
