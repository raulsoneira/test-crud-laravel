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
        Schema::table('ass_nivells', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("nivell_id")->constrained()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ass_nivells', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('nivell_id');
        });
    }
};
