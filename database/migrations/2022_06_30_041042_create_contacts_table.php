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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('address', 250);
            $table->string('phone', 250);
            $table->string('email', 250);
            $table->string('link', 250);
            $table->string('facebook', 250)->nullable();
            $table->string('instagram', 250)->nullable();
            $table->string('github', 250)->nullable();
            $table->string('linkedin', 250)->nullable();
            $table->string('twitter', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};











