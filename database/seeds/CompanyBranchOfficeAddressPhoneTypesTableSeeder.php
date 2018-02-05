<?php

use Illuminate\Database\Seeder;

class CompanyBranchOfficeAddressPhoneTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_branch_office_address_phone_types')->delete();
        
        \DB::table('company_branch_office_address_phone_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fijo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Celular',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fax',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}