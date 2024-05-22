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
            $table->string('_Uuid')->unique();
            $table->string('_Name');
            $table->string('_Code');
            $table->boolean('_IsGroup')->default(false);
            $table->string('_Parent_Uuid')->nullable();
            $table->string('_Owner_Uuid')->nullable();
            $table->boolean('_IsDeleted')->default(false);
            $table->timestamps();

            $table->index(['_Uuid', '_Name', '_Code']);

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
