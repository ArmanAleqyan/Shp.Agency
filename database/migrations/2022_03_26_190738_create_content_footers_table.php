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
        Schema::create('content_footers', function (Blueprint $table) {
            $table->id();
            $table->string('line1')->nullable();
            $table->string('line2')->nullable();
            $table->string('line3')->nullable();
            $table->string('phone')->default('#');
            $table->string('telegram')->default('#');
            $table->string('WhatsApp')->default('#');
            $table->string('line7')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('privacy')->nullable();
            $table->string('privacytext')->nullable();
            $table->string('cookie')->nullable();
            $table->string('cookietext')->nullable();
            $table->string('instagram')->default('#');
            $table->string('facebook')->default('#');
            $table->string('linkdine')->default('#');
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
        Schema::dropIfExists('content_footers');
    }
};
