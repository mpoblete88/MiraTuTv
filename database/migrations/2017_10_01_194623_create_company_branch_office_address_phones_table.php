<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyBranchOfficeAddressPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_branch_office_address_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_branch_office_address_id');
            $table->integer('country_code_id');
            $table->string('phone');
            $table->enum('type', ['fixed', 'mobile']);
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
        Schema::dropIfExists('company_branch_office_address_phones');
    }
}
