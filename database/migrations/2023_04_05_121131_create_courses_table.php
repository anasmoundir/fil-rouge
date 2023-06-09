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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table -> string('title');
            $table -> string('name') ;
            $table -> string('description') -> default('');
            $table -> unsignedBiginteger('category_id');
            $table -> string('image') -> default('');
            $table -> string('video') -> default('');
            $table -> string('slug') -> unique();
            $table -> boolean('IS_FREE') -> default(true);
            $table -> string('duration')-> default('0');
            $table -> string('level')-> default('beginner');
            $table -> string('language')-> default('en');
            $table -> foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table ->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
