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
        Schema::create('content_threes', function (Blueprint $table) {
            $table->id();
            $table->text('line1')->nullable();
            $table->text('line2')->nullable();
            $table->text('line3')->nullable();
            $table->text('line4')->nullable();
            $table->text('line5')->nullable();
            $table->text('line6')->nullable();
            $table->text('line7')->nullable();
            $table->text('line8')->nullable();
            $table->text('line9')->nullable();
            $table->text('line10')->nullable();
            $table->text('line11')->nullable();
            $table->text('line12')->nullable();
            $table->text('line13')->nullable();
            $table->text('line14')->nullable();
            $table->text('line15')->nullable();
            $table->text('line16')->nullable();
            $table->text('line17')->nullable();
            $table->text('line18')->nullable();
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
        Schema::dropIfExists('content_threes');
    }
};
