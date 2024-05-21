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
            $table->string('_Link');
            $table->string('_Code');
            $table->string('Ref_Contractor_Link');
            $table->string('_Date');
            $table->string('_IsTransacted');
            $table->string('_IsDeleted');
            $table->timestamps();
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
