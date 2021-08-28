<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->bigInteger('contact_phone')->primary();
            $table->string('contact_sapaan', '30')->nullable();
            $table->string('contact_name', '50');
            $table->string('contact_email', '50')->nullable();
            $table->string('contact_gender', '25');
            $table->date('contact_birthday');
            $table->string('contact_agama', '25');
            $table->string('contact_address')->nullable();
            $table->string('contact_kecamatan', '50')->nullable();
            $table->string('contact_kabupaten', '50')->nullable();
            $table->string('contact_provinsi', '50')->nullable();
            $table->string('contact_pekerjaan', '30');
            $table->string('contact_status', '20')->nullable();
            $table->string('contact_keterangan')->nullable();
            $table->bigInteger('contact_urut');
            $table->timestamp('contact_created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
