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
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->string('titre');                           // titre de l'article/contenu
            $table->foreignId('typecontenu_id')->constrained('typecontenus'); // lien vers typecontenus
            $table->text('texte');                             // texte du contenu
            $table->dateTime('date_creation');                // date de création
            $table->string('statut');                         // statut (ex: publie, brouillon)
            $table->foreignId('auteur_id')->constrained('users'); // auteur du contenu
            $table->foreignId('parent_id')->nullable()->constrained('contenus'); // contenu parent
            $table->foreignId('region_id')->constrained('regions'); // région liée
            $table->foreignId('langue_id')->constrained('langues'); // langue du contenu
            $table->foreignId('moderateur_id')->nullable()->constrained('users'); // modérateur
            $table->dateTime('date_validation')->nullable();   // date de validation par modérateur
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenus');
    }
};
