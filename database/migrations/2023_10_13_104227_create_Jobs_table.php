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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('position')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->string('website')->nullable();
            $table->string('em_type')->nullable();
            $table->string('work_type')->nullable();
            $table->string('salary')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('filter')->nullable();
            $table->string('artwork')->nullable();
            $table->string('keyword1')->nullable();
            $table->string('keyword2')->nullable();
            $table->string('keyword3')->nullable();
            $table->string('keyword4')->nullable();
            $table->string('keyword5')->nullable();
            $table->unsignedTinyInteger('need_cv')->nullable();
            $table->unsignedTinyInteger('need_cover_letter')->nullable();
            $table->enum('status', ['published', 'on_hold_not_paid', 'expired', 'on_hold_paid', 'in_process'])->default('on_hold_not_paid');
            $table->string('duration')->nullable();
            $table->string('ad_type')->nullable();
            $table->enum('status_admin', ['active', 'blocked'])->default('active');
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
        Schema::dropIfExists('Jobs');
    }
}
