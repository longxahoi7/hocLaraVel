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
        Schema::create('oders_detail', function (Blueprint $table) {
            $table->increments('oder_detail_id');
            $table->unsignedInteger('oder_id');
            $table->unsignedInteger('product_id');
            $table->integer('quantity')->default(1);
            $table->float('price',10,2);
            $table->timestamps();
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('casCade');
            $table->foreign('oder_id')->references('oder_id')->on('oders')->onDelete('casCade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oders_detail');
    }
};
