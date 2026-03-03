<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('nguoi_dung', function (Blueprint $table) {
        $table->id('ma_nguoi_dung');
        $table->string('ho_ten');
        $table->string('email')->unique();
        $table->string('mat_khau');
        $table->unsignedBigInteger('ma_vai_tro');
        $table->timestamps();

        $table->foreign('ma_vai_tro')
              ->references('ma_vai_tro')
              ->on('vai_tro')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoi_dung');
    }
};
