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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('admin_title')->nullable();
            $table->longText('admin_description')->nullable();
            $table->string('admin_favicon')->nullable();
            $table->string('admin_logo')->nullable();
            $table->string('site_title')->nullable();
            $table->longText('site_description')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('site_logo')->nullable();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
