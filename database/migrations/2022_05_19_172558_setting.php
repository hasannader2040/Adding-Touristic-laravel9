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
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 150);
            $table->string('keywords')->nullable();
            $table->string('description', 150)->default('here is a description')->nullable();
            $table->string('company', 150)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('phone', 150)->nullable();
            $table->string('fax', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('SMTPserver', 150)->nullable();
            $table->string('SMTPemail', 150)->nullable();
            $table->string('SMTPpassword', 150)->nullable();
            $table->string('SMTPfacebook', 150)->nullable();
            $table->string('SMTPinstrgram', 150)->nullable();
            $table->string('SMTPtwitter', 150)->nullable();
            $table->string('SMTPyoutube', 150)->nullable();
            $table->string('aboutus')->nullable();
            $table->string('contact')->nullable();
            $table->string('references')->nullable();
            $table->string('icon', 50)->nullable();
            $table->string('status', 150)->nullable();
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
        //
    }
};
