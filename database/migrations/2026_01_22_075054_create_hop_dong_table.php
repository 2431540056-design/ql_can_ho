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
    Schema::create('hop_dong', function (Blueprint $table) {
        $table->id('ma_hop_dong');
        $table->unsignedBigInteger('ma_cu_dan');
        $table->unsignedBigInteger('ma_can_ho');
        $table->date('ngay_bat_dau');
        $table->date('ngay_ket_thuc');
        $table->decimal('gia_thue', 15, 2);
        $table->string('loai_hop_dong'); // thuê / mua
        $table->string('trang_thai');    // hiệu lực / hết hạn
        $table->timestamps();

        $table->foreign('ma_cu_dan')
              ->references('ma_cu_dan')
              ->on('cu_dan')
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
        Schema::dropIfExists('hop_dong');
    }
};
