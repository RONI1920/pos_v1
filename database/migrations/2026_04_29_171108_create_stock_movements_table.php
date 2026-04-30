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
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();

            // Ganti dengan ini:
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            $table->enum('movement_type', ['IN', 'OUT', 'ADJUSTMENT']);
            $table->integer('qty');
            $table->integer('qty_before');
            $table->integer('qty_after');
            $table->string('ref_type');
            $table->unsignedBigInteger('ref_id');

            // Ganti juga untuk user_id:
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
