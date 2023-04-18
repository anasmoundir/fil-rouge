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
        Schema::table('lesson_resources', function (Blueprint $table) {
            //
            $table->boolean('processed')->default(false)->after('file');
            $table->string('uid');
            $table->string('ressouce_id');
            $table->enum('visibility', ['public', 'private'])->default('public');
            $table->boolean('allow_download')->default(false);
            $table->integer('processed_percentage')->default(0);
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lesson_resources', function (Blueprint $table) {
            //
            $table->dropColumn('processed');
            $table->dropColumn('uid');
            $table->dropColumn('ressouce_id');
            $table->dropColumn('visibility');
            $table->dropColumn('allow_download');
            $table->dropColumn('processed_percentage');
        });
    }
};
