<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobapplicationstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jobapplicationstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_post')->nullable();
            $table->string('company')->nullable();
            $table->date('applied_date')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();

            $table->string('col1')->nullable();
            $table->string('col2')->nullable();
            $table->string('col3')->nullable();
            $table->string('col4')->nullable();
            $table->string('col5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jobapplicationstatus');
    }
}
