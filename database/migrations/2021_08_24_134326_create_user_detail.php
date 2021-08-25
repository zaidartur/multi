<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_detail', function (Blueprint $table) {
            $table->char('detail_uuid', '36')->primary();
            $table->string('detail_sapaan', '30')->nullable();
            $table->string('detail_alamat')->nullable();
            $table->integer('detail_phone')->nullable();
            $table->string('detail_ket')->nullable();
            $table->string('detail_posisi', '30')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_detail');
    }
}
