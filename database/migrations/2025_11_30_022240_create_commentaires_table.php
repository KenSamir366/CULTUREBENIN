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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');      // lien vers utilisateur
            $table->foreignId('contenu_id')->constrained('contenus'); // lien vers contenu
            $table->text('texte');                                   // texte du commentaire
            $table->tinyInteger('note')->nullable();                 // note optionnelle
            $table->timestamp('date_commentaires')->useCurrent();    // date du commentaire
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
