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
        Schema::create('working_time', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('hours')->comment('số giờ làm');
            $table->integer('user_id')->comment('id nhân viên');
            $table->integer('loai_ca_id')->comment('id loại ca');
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
        Schema::dropIfExists('working_time');
    }
};
