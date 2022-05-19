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
            //$table->id();
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords',)->Nullable();
            $table->string('description',)->Nullable();
            $table->string('company',150)->Nullable();
            $table->string('address',150)->Nullable();
            $table->string('phone',150)->Nullable();
            $table->string('fax',150)->Nullable();
            $table->string('email',150)->Nullable();
            $table->string('SMTPserver',150)->Nullable();
            $table->string('SMTPemail',150)->Nullable();
            $table->string('SMTPpassword',150)->Nullable();
            $table->string('SMTPfacebook',150)->Nullable();
            $table->string('SMTPinstrgram',150)->Nullable();
            $table->string('SMTPtwitter',150)->Nullable();
            $table->string('SMTPyoutube',150)->Nullable();
            $table->string('aboutus')->Nullable();
            $table->string('contact')->Nullable();
            $table->string('references')->Nullable();
            $table->string('icon',50)->Nullable();
            $table->string('status',150)->Nullable();
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
        Schema::dropIfExists('settings');
    }
};
