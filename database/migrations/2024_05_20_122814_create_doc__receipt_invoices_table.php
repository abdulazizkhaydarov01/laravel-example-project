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
        Schema::create('doc__receipt_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('_Uuid')->unique();
            $table->string('_Code');
            $table->string('Ref_Contractor_Uuid');
            $table->date('_Date');
            $table->boolean('_IsTransacted')->default(false);
            $table->boolean('_IsDeleted')->default(false);
            $table->timestamps();

            $table->index(['_Uuid', '_Code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc__receipt_invoices');
    }
};
