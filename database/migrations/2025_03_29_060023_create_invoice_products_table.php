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
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->string('qyt',50);
            $table->string('sale_price',50);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->restrictOnUpdate();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->restrictOnUpdate();
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete()->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};
