<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClinicPatient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_patient', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('patients_id');
            // $table->foreign('patients_id')->references('id')->on('patient');
            $table->bigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->bigInteger('clinic_id')->unsigned()->index();
            $table->foreign('clinic_id')->references('id')->on('clinics');
            $table->timestamps();
        });
        DB::unprepared('ALTER TABLE clinic_patient ADD UNIQUE KEY(`patient_id`,`clinic_id`)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('clinic_patient');
    }
}
