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
        //ajout des colonnes biography et avatar
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->string('biography')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //supprimer les colonnes
        //ajout des colonnes biography et avatar
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('biography');
        });
    }
};
