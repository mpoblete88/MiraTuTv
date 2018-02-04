<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('address');
            $table->string('number', 45)->nullable();
            $table->integer('property_number')->unsigned()->nullable();
            $table->string('latitude', 45);
            $table->string('longitude', 45);
            $table->integer('property_id')->unsigned();
            $table->integer('commune_id')->unsigned();
            $table->integer('company_branch_office_id')->unsigned();
            $table->enum('status', ['active', 'inactive']);
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
