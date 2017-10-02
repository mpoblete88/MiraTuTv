<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name'            => 'MiraTuTv',
            'short_name'      => 'Mira tu TV',
            'favicon_path'    => 'image/company/favicon.ico',
            'logo_path'       => 'image/company/logo.png',
            'logo_dark_path'  => 'image/company/logo_dark.png',
            'logo_light_path' => 'image/company/logo_light.png',
            'web_site'        => 'http://www.miratutv.app',
        ]);

        DB::table('company_branch_offices')->insert([
            'company_id' => '1',
            'name'       => 'Casa Matriz',
            'rut'        => '76.303.999-4',
            'current'    => 'true',
            'status'     => 'active',

        ]);

        DB::table('company_branch_office_addresses')->insert([
            'company_branch_office_id' => '1',
            'country_id'               => '1',
            'city_id'                  => '1',
            'property_id'              => '1',
            'address'                  => 'Pasaje la plaza',
            'number'                   => '2555',
            'property_number'          => '',
            'latitude'                 => '111111111111',
            'longitude'                => '2222222222222',

        ]);
    }
}
