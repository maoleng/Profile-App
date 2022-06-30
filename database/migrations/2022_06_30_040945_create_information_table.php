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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->text('word_run');
            $table->string('about_me', 250)->nullable();
            $table->string('name', 250);
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->string('cv_link', 250)->nullable();
            $table->foreignId('avatar_id')->constrained('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information');
    }
};
