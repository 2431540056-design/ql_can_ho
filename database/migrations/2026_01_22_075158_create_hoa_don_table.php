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
    Schema::create('hoa_don', function (Blueprint $table) {
        $table->id('ma_hoa_don');
        $table->unsignedBigInteger('ma_can_ho');
        $table->decimal('tong_tien', 15, 2);
        $table->date('han_thanh_toan');
        $table->string('trang_thai'); // chưa thanh toán / đã thanh toán
        $table->timestamps();

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
        Schema::dropIfExists('hoa_don');
    }
};
