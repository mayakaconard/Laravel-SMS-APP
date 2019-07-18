<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsMonitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_monitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender_id');
            $table->string('receiver_no');
            $table->string('message');
            $table->string('messageId');
            $table->string('signature')->nullable();
            $table->string('status');
            $table->string('statusCode');
            $table->string('cost');
            $table->integer('messageParts');
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
        Schema::dropIfExists('sms_monitors');
    }
}
