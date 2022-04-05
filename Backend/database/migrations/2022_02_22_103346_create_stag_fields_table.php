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
        Schema::create('stag_fields', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('title_en', 128);
            $table->string('faculty', 3);
            $table->string('language', 2)
                ->nullable()
                ->default('cs');
            $table->string('degree', 10)
                ->nullable()
                ->default(null);
            $table->boolean('is_full_time')->default(true);
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
        Schema::dropIfExists('stag_fields');
    }
};
