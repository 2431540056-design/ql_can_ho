<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('yeu_cau_thue', function (Blueprint $table) {

            $table->id('ma_yeu_cau');

            $table->unsignedBigInteger('ma_nguoi_dung');
            $table->unsignedBigInteger('ma_can_ho');

            $table->foreign('ma_nguoi_dung')
                    ->references('ma_nguoi_dung')
                    ->on('nguoi_dung')
                    ->onDelete('cascade');

            $table->foreign('ma_can_ho')
                    ->references('ma_can_ho')
                    ->on('can_ho')
                    ->onDelete('cascade');

            $table->date('ngay_hen');
            $table->time('gio_hen');

            $table->text('ghi_chu')->nullable();
            $table->enum('trang_thai',[
            'cho_duyet',
            'da_duyet',
            'tu_choi'
            ])->default('cho_duyet');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('yeu_cau_thue');
    }
};