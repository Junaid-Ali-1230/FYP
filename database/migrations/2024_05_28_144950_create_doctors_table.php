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
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->string('phone_no', 11);
            $table->string('doc_speciality');
            $table->text('doc_experties');
            $table->integer('years_of_experience');
            $table->string('doc_degree');
            $table->string('doc_university');
            $table->string('regis_city');
            $table->string('regis_hospital');
            $table->string('availability_day');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('profile_pic')->nullable();
            $table->string('document_pic');
            $table->integer('wait_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
