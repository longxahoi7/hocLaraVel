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
        Schema::create('oders', function (Blueprint $table) {
            $table->increments('oder_id');
            $table->unsignedInteger('user_id');
            $table->float('toTalPrice',10,2);
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('casCade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oders');
    }
};
