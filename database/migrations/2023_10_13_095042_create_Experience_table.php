<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Experience', function (Blueprint $table) {
            $table->id();
           
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('s_date')->nullable();
            $table->string('e_date')->nullable();
            $table->string('location')->nullable();
            
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
        Schema::dropIfExists('Experience');
    }
}
