<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('Reviewer');
            $table->string('Email');
            $table->text('Review');
            $table->decimal('Rating', 2, 1);
            $table->string('Employee');
            $table->string('Employees_position');
            $table->string('Unique_employee_number');
            $table->string('Company');
            $table->text('Company description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
