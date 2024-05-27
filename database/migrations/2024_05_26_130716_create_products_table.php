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
            $table->string('title')->nullable();
            $table->string('slung')->nullable();
            $table->string('price')->nullable();
            $table->string('price_raw')->nullable();
            $table->string('stock')->nullable();
            $table->string('category_id')->nullable();
            $table->string('google_product_category')->nullable();
            $table->string('brand')->nullable();
            $table->string('sku')->nullable();
            $table->text('meta')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
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
