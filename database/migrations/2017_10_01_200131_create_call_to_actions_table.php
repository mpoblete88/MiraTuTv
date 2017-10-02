<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallToActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_to_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('subtitle');
            $table->enum('title_type',['h1','h2','h3','h4','h5','h6']);
            $table->enum('subtitle_type',['h1','h2','h3','h4','h5','h6']);
            $table->string('title_color');
            $table->string('subtitle_color');
            $table->string('text_button');
            $table->string('url_button');
            $table->string('button_background_color');
            $table->string('button_text_color');
            $table->string('background_color');
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
        Schema::dropIfExists('call_to_actions');
    }
}
