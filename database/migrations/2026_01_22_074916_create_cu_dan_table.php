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
    Schema::create('cu_dan', function (Blueprint $table) {
        $table->id('ma_cu_dan');
        $table->unsignedBigInteger('ma_nguoi_dung');
        $table->unsignedBigInteger('ma_can_ho');
        $table->string('so_dien_thoai');
        $table->string('cccd');
        $table->timestamps();

        $table->foreign('ma_nguoi_dung')
              ->references('ma_nguoi_dung')
              ->on('nguoi_dung')
              ->onDelete('cascade');

        $table->foreign('ma_can_ho')
              ->references('ma_can_ho')
              ->on('can_ho')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cu_dan');
    }
};
