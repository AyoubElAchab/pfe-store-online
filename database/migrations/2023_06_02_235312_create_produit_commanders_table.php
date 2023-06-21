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
        Schema::create('produit_commanders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commande_id');
            $table->unsignedBigInteger('produit_id');
            $table->integer('quantite');
            $table->foreign('commande_id')->references('id')->on('utilisateurs')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('produit_id')->references('id')->on('produits')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produit_commanders', function (Blueprint $table) {
            $table->dropForeign(['commande_id']);
            $table->dropForeign(['produit_id']);

        });
        Schema::dropIfExists('produit_commanders');
    }
};

