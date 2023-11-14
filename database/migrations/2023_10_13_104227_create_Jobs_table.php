<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('category')->nullable();
            $table->string('requirments')->nullable();
            $table->string('type')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->unsignedTinyInteger('need_cv')->nullable();
            $table->unsignedTinyInteger('need_cover_letter')->nullable();
            $table->string('company_id')->nullable();
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
        Schema::dropIfExists('Jobs');
    }
}
