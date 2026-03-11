<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hop_dongs', function (Blueprint $table) {
            $table->id('ma_hop_dong');

            $table->unsignedBigInteger('ma_can_ho');

            $table->unsignedBigInteger('ma_cu_dan');

            $table->date('ngay_bat_dau');

            $table->date('ngay_ket_thuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hop_dongs');
    }
};
