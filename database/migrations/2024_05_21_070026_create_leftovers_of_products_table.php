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
        Schema::create('leftovers_of_products', function (Blueprint $table) {
            $table->id();
            $table->date('Period');
            $table->string('Doc_Uuid');
            $table->string('TypeOfDoc');
            $table->string('Ref_Product_Uuid');
            $table->integer('Quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leftovers_of_products');
    }
};
