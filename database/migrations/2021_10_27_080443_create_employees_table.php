<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empadd', function (Blueprint $table) {
            $table->id()->from(101)->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->integer('age');
            $table->string('sex');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        Schema::create('empattendance', function (Blueprint $table) {
            $table->id()->from(2001);
            $table->unsignedBigInteger('empadd_id');
            $table->foreign('empadd_id')->references('id')->on('empadd')->onDelete('cascade')->unique();
            $table->string('datefrom');
            $table->string('dateto');
            $table->integer('rate');
            $table->integer('absent');
            $table->integer('workdays');
            $table->integer('initialamount');
            $table->integer('total_salary');
             $table->timestamp('created_at')->useCurrent();
             $table->timestamp('updated_at')->useCurrent();
        });
        Schema::create('empDeductionSalary', function (Blueprint $table) {
            $table->id()->from(30001);
            $table->unsignedBigInteger('empattendance_id');
            $table->foreign('empattendance_id')->references('id')->on('empattendance')->onDelete('cascade')->unique();
            $table->string('typeDeduction');
            $table->integer('deductionAmount');
            $table->decimal('deducted_salary')->default(0);
             $table->timestamp('created_at')->useCurrent();
             $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
