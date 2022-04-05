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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('native_name', 128)
                ->nullable()
                ->default(null);
            $table->foreignId('location_id')
                ->constrained('locations');
            $table->bigInteger('xchange_id')
                ->nullable()
                ->default(null);
            $table->string('xchange_link', 128)
                ->nullable()
                ->default(null);
            $table->string('web', 256)
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
        Schema::dropIfExists('universities');
    }
};
