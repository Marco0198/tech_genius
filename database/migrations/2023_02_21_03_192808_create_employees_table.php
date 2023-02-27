<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('employee_first_name');
            $table->string('employee_last_name');
            $table->string('employee_telephone_number');
            $table->string('employee_email');
            $table->unsignedBigInteger('manager_id')->index();
            $table->unsignedBigInteger('department_id')->index();
            $table->enum('employee_status', ['active', 'inactive'])->default('active');
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
