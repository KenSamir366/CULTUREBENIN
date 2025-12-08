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
        Schema::create('parlers', function (Blueprint $table) {  // pluriel recommandé
            $table->id();
            $table->foreignId('region_id')->constrained('regions'); // clé étrangère vers regions
            $table->foreignId('langue_id')->constrained('langues'); // clé étrangère vers langues
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parlers');  // correspond au nom de la table
    }
};
