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
    Schema::create('thanh_toan', function (Blueprint $table) {
        $table->id('ma_thanh_toan');
        $table->unsignedBigInteger('ma_hoa_don');
        $table->decimal('so_tien', 15, 2);
        $table->string('phuong_thuc'); // tiền mặt / chuyển khoản
        $table->date('ngay_thanh_toan');
        $table->timestamps();

        $table->foreign('ma_hoa_don')
              ->references('ma_hoa_don')
              ->on('hoa_don')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanh_toan');
    }
};
