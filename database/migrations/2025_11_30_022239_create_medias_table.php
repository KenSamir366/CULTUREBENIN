<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('chemin');
            $table->enum('type', ['image', 'video', 'audio', 'document']);
            $table->integer('taille')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('contenu_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('typemedia_id')->nullable()->constrained('typemedias')->onDelete('set null'); // ← CHANGÉ ICI
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};