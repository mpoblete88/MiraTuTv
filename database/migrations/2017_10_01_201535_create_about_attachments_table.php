<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('about_id');

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
        Schema::dropIfExists('about_attachments');
    }
}
