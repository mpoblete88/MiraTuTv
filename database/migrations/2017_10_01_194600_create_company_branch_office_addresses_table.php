<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyBranchOfficeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_branch_office_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_branch_office_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('property_id');
            $table->text('address');
            $table->string('number');
            $table->string('property_number');
            $table->text('latitude');
            $table->text('longitude');
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
        Schema::dropIfExists('company_branch_office_addresses');
    }
}
