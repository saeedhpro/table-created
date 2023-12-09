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
        Schema::create('table_b_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('star_count')->default(0);
            $table->foreignId('table_a_id')->references('id')->on('table_a_s')->cascadeOnDelete();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_b_s');
    }
};
