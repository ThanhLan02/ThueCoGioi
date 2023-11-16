<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('hoten')->nullable();
            $table->string('gioitinh')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('sdt')->nullable();
            $table->string('anh')->nullable();
            $table->string('congty')->nullable();
            $table->string('email')->unique();
            $table->string('diachi')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('quyen_id')->unsigned()->nullable();
            $table->integer('trangthai')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
