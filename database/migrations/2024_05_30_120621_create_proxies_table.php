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
        Schema::create('proxies', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('slug');
            $table->string('title');
            $table->string('banner_image')->nullable();
            $table->text('table_contents')->nullable();
            $table->text('description')->nullable();
            $table->string('wp_image')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('read_contents')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proxies');
    }
};
