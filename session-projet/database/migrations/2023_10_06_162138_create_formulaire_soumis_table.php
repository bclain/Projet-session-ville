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
        Schema::create('formulaire_soumis', function (Blueprint $table) {
            $table->id();
            $table->string('num_superieur', 255);
            $table->string('num_employe', 255);
            $table->json('data', 2000);
            $table->string('type_forms', 255);
            $table->boolean('dg')->default(false);
            $table->boolean('vu')->default(false);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaire_soumis');
    }
};
