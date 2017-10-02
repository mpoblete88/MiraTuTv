<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallToActionAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_to_action_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('call_to_action_id');

            $table->string('type');
            $table->string('file_name');
            $table->string('size');
            $table->string('format_file');
            $table->text('path');

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
        Schema::dropIfExists('call_to_action_attachments');
    }
}
