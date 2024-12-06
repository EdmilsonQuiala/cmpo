<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('darkmode', ['yes', 'no'])->default('no');
            $table->enum('email_notification', ['yes', 'no'])->default('yes');
            $table->enum('phone_notification', ['yes', 'no'])->default('yes');
            $table->enum('hide_money', ['yes', 'no'])->default('no');
            $table->timestamps();

            // Chave estrangeira
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
