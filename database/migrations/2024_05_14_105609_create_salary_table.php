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
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('ngaynhan')->comment('thời gian nhận');
            $table->string('ngaytra')->comment('thời gian trả');
            $table->integer('user_id')->comment('id nhân viên');
            $table->rememberToken();
            $table->softDeletes();
            $table->integer("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary');
    }
};
