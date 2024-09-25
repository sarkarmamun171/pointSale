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
            $table->string('productname');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('brand_id');
            $table->double('price');
            $table->integer('discount')->nullable();
            $table->integer('after_discount')->nullable();
            $table->string('short_desp')->nullable();
            $table->string('long_desp')->nullable();
            $table->string('additional_info')->nullable();
            $table->string('preview');
            $table->string('slug');
            // $table->foreign('cat_id')->references('id')->on('categories')->onDelete('casecade');
            // $table->foreign('brand_id')->references('id')->on('brands')->onDelete('casecade');
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
