<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status',['active', 'inactive']);
            $table->string('title');
            $table->string('subtitle');
            $table->string('background_color');
            $table->string('title_color');
            $table->string('subtitle_color');
            $table->string('footer_text_color');
            $table->text('description');
            $table->text('footer');
            $table->text('font_family');

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
        Schema::dropIfExists('system_maintenances');
    }
}
