<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reviewer_name')->nullable();
            $table->string('description')->nullable();
            $table->string('rating')->nullable();
            $table->date('date')->nullable();
            $table->string('company_id')->nullable();
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
        Schema::dropIfExists('Company_reviews');
    }
}
