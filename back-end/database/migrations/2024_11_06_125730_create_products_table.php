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
            $table->string('title', 45)->nullable();
            $table->string('description', 225)->nullable();
            $table->string('slug', 200)->nullable();;
            $table->integer('quantity')->default(1); // the quantity of the product in the stock
            $table->decimal('price',8,2);
            $table->boolean('published')->default(0);
            $table->boolean('inStock')->default(0);
            $table->foreignId('category_id')->constrained('categories')->onDelete('restrict')->onUpdate('restrict');
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
