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
            $table->string('name')->default();
            $table->string('category')->default();
            $table->integer('mrp')->default(0);
            $table->integer('price')->default(0);
            $table->integer('quantity')->default(0);
            $table->string('img-1')->default();
            $table->string('img-2')->default();
            $table->string('img-3')->default();
            $table->string('desc')->default();
            $table->string('short-desc')->default();
            $table->string('meta-title')->default();
            $table->string('meta-desc')->default();
            $table->string('meta-keyword')->default();
            $table->string('status')->default();
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
