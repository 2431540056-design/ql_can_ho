<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('thong_bao', function (Blueprint $table) {

            $table->id('ma_thong_bao');

            $table->string('tieu_de');

            $table->text('noi_dung');

            $table->unsignedBigInteger('ma_cu_dan')->nullable();

            $table->date('ngay_gui');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('thong_bao');
    }
};