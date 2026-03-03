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
    Schema::create('loai_can_ho', function (Blueprint $table) {
        $table->id('ma_loai_can_ho');
        $table->string('ten_loai');
        $table->float('dien_tich_tb');
        $table->decimal('gia_co_ban', 15, 2);
        $table->text('mo_ta')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loai_can_ho');
    }
};
