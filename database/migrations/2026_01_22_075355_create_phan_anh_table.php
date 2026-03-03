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
    Schema::create('phan_anh', function (Blueprint $table) {
        $table->id('ma_phan_anh');
        $table->unsignedBigInteger('ma_cu_dan');
        $table->text('noi_dung');
        $table->string('trang_thai'); // mới / đang xử lý / đã xử lý
        $table->date('ngay_gui');
        $table->timestamps();

        $table->foreign('ma_cu_dan')
              ->references('ma_cu_dan')
              ->on('cu_dan')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phan_anh');
    }
};
