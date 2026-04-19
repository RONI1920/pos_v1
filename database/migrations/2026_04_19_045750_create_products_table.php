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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categori_id')->constrained();
            $table->string('sku')->unique();
            $table->string('name produk');

            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->decimal('buy_price',  15, 2)->default(0);
            $table->decimal('sell_price', 15, 2)->default(0);
            $table->integer('stok_qty')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
