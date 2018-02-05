<?php

use Illuminate\Database\Seeder;

class CompanyBranchOfficeAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_branch_office_addresses')->delete();
        
        \DB::table('company_branch_office_addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'address' => 'Estado ',
                'number' => '171',
                'property_number' => 21,
                'latitude' => '',
                'longitude' => '',
                'property_id' => 4,
                'commune_id' => 6101,
                'company_branch_office_id' => 1,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}