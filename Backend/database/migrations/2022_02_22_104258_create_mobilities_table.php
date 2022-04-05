<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')
                ->constrained('universities');
            $table->foreignId('student_id')
                ->constrained('students');
            $table->date('arrival');
            $table->date('departure')
                ->nullable()
                ->default(null);
            $table->year('year');
            $table->boolean('is_summer');
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
        Schema::dropIfExists('mobilities');
    }
};
