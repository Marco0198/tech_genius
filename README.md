<?php
//
//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//
//return new class extends Migration
//{
//    /**
//     * Run the migrations.
//     */
//    public function up(): void
//    {
////        Schema::create('employees', function (Blueprint $table) {
////            $table->id();
////            $table->string('first_name');
////            $table->string('last_name');
////            $table->string('telephone_number');
////            $table->string('email');
////            $table->unsignedBigInteger('manager_id')->index();
////            $table->unsignedBigInteger('department_id')->index();
////            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
////            $table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');
////            $table->enum('status', ['active', 'inactive'])->default('active');
////            $table->timestamps();
////        });
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::dropIfExists('employees');
//    }
//};