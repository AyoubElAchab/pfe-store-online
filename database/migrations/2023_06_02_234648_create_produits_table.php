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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('prixOriginal');
            $table->integer('prixFinal');
            $table->text('description');
            $table->string('urlimg');
            $table->unsignedBigInteger('categorie_id');
            $table->integer('QStock');
            $table->foreign('categorie_id')->references('id')->on('categories')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->dropForeign(['categorie_id']);
        });
        Schema::dropIfExists('produits');

    }
};
