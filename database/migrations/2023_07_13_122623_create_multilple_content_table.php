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
        Schema::create('multilple_content', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->string('stash')->nullable();
            $table->string('description')->nullable();  
            $table->string('pagetype')->nullable();
            $table->string('sub_type')->nullable();
            $table->string('s_title')->nullable();
            $table->string('s_stash')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multilple_content');
    }
};
