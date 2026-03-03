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
    Schema::create('can_ho', function (Blueprint $table) {
        $table->id('ma_can_ho');
        $table->string('so_can_ho');
        $table->integer('tang');
        $table->float('dien_tich');
        $table->string('trang_thai');
        $table->unsignedBigInteger('ma_loai_can_ho');
        $table->timestamps();

        $table->foreign('ma_loai_can_ho')
              ->references('ma_loai_can_ho')
              ->on('loai_can_ho')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('can_ho');
    }
};
