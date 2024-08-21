<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Modifier la colonne picture pour qu'elle soit nullable
            $table->string('picture')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Revenir à l'état précédent si nécessaire
            $table->string('picture')->nullable(false)->change();
        });
    }
};