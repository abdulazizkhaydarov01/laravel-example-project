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
        Schema::create('doc_table_receipt_invoices_products', function (Blueprint $table) {
            $table->id();
            $table->string('Doc_ReceiptInvoice');
            $table->string('Ref_Product');
            $table->integer('Quantity');
            $table->integer('Price');
            $table->integer('Amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_table_receipt_invoices_products');
    }
};
