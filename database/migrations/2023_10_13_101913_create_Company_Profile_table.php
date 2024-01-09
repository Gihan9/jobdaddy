<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company_Profile', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('Company')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('website')->nullable();
        
            $table->string('date')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('about')->nullable();
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('Company_Profile');
    }
}
