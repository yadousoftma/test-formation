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
        Schema::create('elements_devis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_devis');
            $table->foreign('id_devis')->references('id')->on('devis');
            $table->unsignedBigInteger('id_produit');
            $table->foreign('id_produit')->references('id')->on('produits');
            $table->float("qte");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements_devis');
    }
};
