<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyBranchOfficeSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
         'company_branch_office_socials',
         function (Blueprint $table) {
             $table->increments('id');
             $table->text('url');
             $table->integer('type_id');
             $table->integer('company_branch_office_id');
             $table->timestamps();
         }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_branch_office_socials');
    }
}
