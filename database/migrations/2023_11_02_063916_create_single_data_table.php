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
        Schema::create('single_data', function (Blueprint $table) {
            $table->id();
            $table->text('heading_one');
            $table->string('picture_one');
            $table->text('heading_second');
            $table->text('heading_third');
            $table->string('picture_second');
            $table->text('heading_fourth');
            $table->string('picture_third');
            $table->text('heading_fifth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_data');
    }
};
