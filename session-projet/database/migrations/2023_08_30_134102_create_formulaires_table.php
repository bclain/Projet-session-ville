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
        Schema::create('formulaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('num_superieur');
            $table->unsignedBigInteger('num_employe');
            $table->string('data', 255);
            $table->string('type_forms', 255);

            $table->foreign('num_superieur')->references('id')->on('usagers');
            $table->foreign('num_employe')->references('id')->on('usagers');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaires');
    }
};
