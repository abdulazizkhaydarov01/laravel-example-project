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
        Schema::create('ref__contractors', function (Blueprint $table) {
            $table->id();
            $table->string('_Link');
            $table->string('_Code');
            $table->string('_IsGroup');
            $table->string('_ParentLink');
            $table->string('_OwnerLink');
            $table->string('_IsDeleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref__contractors');
    }
};
