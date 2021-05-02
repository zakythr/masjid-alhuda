<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('name')->nullable();
            $table->string('kk_number')->nullable();
            $table->string('nik')->nullable();
            $table->integer('sex_id')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('religion_id')->nullable();
            $table->integer('education_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('marital_status_id')->nullable();
            $table->integer('family_status_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('kitas_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('citizens');
    }
}
