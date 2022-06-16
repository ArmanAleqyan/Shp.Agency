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
        Schema::create('content_for_links', function (Blueprint $table) {
            $table->id();
            $table->longText('link1')->default('#');
            $table->longText('link2')->default('#');
            $table->longText('link3')->default('#');
            $table->longText('link4')->default('#');
            $table->longText('link5')->default('#');
            $table->longText('link6')->default('#');
            $table->longText('link7')->default('#');
            $table->longText('link8')->default('#');
            $table->longText('link9')->default('#');
            $table->longText('link10')->default('#');
            $table->longText('link11')->default('#');
            $table->longText('link12')->default('#');
            $table->longText('link13')->default('#');
            $table->longText('link14')->default('#');
            $table->longText('link15')->default('#');
            $table->longText('link16')->default('#');
            $table->longText('link17')->default('#');
            $table->longText('link18')->default('#');
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
        Schema::dropIfExists('content_for_links');
    }
};
