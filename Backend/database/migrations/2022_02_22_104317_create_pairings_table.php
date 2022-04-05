<?php

declare (strict_types=1);

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
        Schema::create('pairings', function (Blueprint $table) {
            $table->foreignId('mobility_id')
                ->constrained('mobilities');
            $table->foreignId('foreign_course_id')
                ->constrained('foreign_courses');
            $table->foreignId('home_course_id')
                ->constrained('home_courses');
            $table->tinyInteger('rating')
                ->nullable()
                ->default(null);
            $table->foreignId('cancellation_id')
                ->nullable()
                ->default(null)
                ->constrained('cancellations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pairings');
    }
};
