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
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('produit_id');
            $table->integer('Quantite');
            $table->foreign('client_id')->references('id')->on('utilisateurs')
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
        Schema::table('paniers', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->dropForeign(['produit_id']);

        });
        Schema::dropIfExists('paniers');
    }
};



