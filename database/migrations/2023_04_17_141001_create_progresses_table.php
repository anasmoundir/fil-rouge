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
        Schema::Create('progresses', function (Blueprint $table) { 
            //the id part 
            $table->id();
            $table->unsignedBigInteger('progressable_id');
            $table->string('progressable_type');
            $table->index(['progressable_id', 'progressable_type']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('progresses', function (Blueprint $table) {
            //
        });
    }
};
