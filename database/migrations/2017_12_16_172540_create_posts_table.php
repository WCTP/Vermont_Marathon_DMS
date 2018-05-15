<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('bib_number');
            $table->string('location');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->tinyInteger('age');
            $table->string('sex');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pt_info')->nullable();
            $table->string('time_in');
            $table->string('time_out')->nullable();
            $table->tinyInteger('race_chip_collected')->default(0);
            $table->tinyInteger('medal_given')->default(0);
            $table->string('relevant_medical_history')->nullable();
            $table->string('allergies')->nullable();
            $table->string('current_meds')->nullable();
            $table->string('chief_complaint');
            $table->text('vital_signs_1')->nullable();
            $table->text('vital_signs_2')->nullable();
            $table->text('vital_signs_3')->nullable();
            $table->text('vital_signs_4')->nullable();
            $table->text('vital_signs_5')->nullable();
            $table->string('treatment_1')->nullable();
            $table->string('treatment_2')->nullable();
            $table->string('treatment_3')->nullable();
            $table->string('treatment_4')->nullable();
            $table->string('treatment_5')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('disposition')->nullable();
            $table->string('disposition_time')->nullable();
            $table->string('disposition_transportation')->nullable();
            $table->tinyInteger('family_notification')->default(0);
            $table->text('treatment_notes')->nullable();
            $table->string('provider_name');
            $table->string('provider_prefix')->nullable();
            $table->tinyInteger('provider_signature')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
