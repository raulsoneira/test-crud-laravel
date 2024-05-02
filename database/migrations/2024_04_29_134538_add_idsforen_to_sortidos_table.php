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
        Schema::table('sortidos', function (Blueprint $table) {
            $table->foreignId("sortide_id")->constrained()->cascadeOnDelete();
            $table->foreignId("grup_id")->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sortidos', function (Blueprint $table) {
            $table->dropColumn('sortide_id');
            $table->dropColumn('grup_id');
        });
    }
};
