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
        Schema::table('sortides', function (Blueprint $table) {
            $table->string('nom');
            $table->foreignId("estat_id")->constrained()->cascadeOnDelete();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("sortido_id")->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sortides', function (Blueprint $table) {
            $table->dropColumn('nom');
            $table->dropColumn('estat_id');
            $table->dropColumn('user_id');
            $table->dropColumn('sortido_id');
        });
    }
};
