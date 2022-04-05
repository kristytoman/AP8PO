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
        Schema::create('stag_course_stag_field', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)
                ->nullable()
                ->default(null);
            $table->string('name_en', 128)
                ->nullable()
                ->default(null);
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
        Schema::dropIfExists('stag_courses');
    }
};
