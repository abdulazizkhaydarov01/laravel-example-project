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
        Schema::create('ref__products', function (Blueprint $table) {
            $table->id();
            $table->string('_Link');
            $table->string('_Name');
            $table->string('_Code');
            $table->boolean('_IsGroup')->default(false);
            $table->string('_ParentLink')->nullable();
            $table->string('_OwnerLink')->nullable();
            $table->boolean('_IsDeleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref__products');
    }
};
