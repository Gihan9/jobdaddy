<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jobseekers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('designation')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('Jobseekers');
    }
}
