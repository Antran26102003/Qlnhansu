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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gender');
            $table->string('birthday');
            $table->string('phone_number');
            $table->string('cccd');
            $table->string('address');
            $table->string('avatar');
            $table->integer('department_id')->comment('id phòng ban');
            $table->integer('part_id')->comment('id bộ phận');
            $table->integer('position_id')->comment('id chức vụ');
            $table->integer('level_id')->comment('id trình độ');
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
        Schema::dropIfExists('users');
    }
};
