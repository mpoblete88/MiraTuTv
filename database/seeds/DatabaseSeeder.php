<?php

    use App\Admin;
    use App\Catalog\Property;
    use App\Company;
    use App\CompanyBranchOffice;
    use App\Customer;
    use App\User;
    use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Admin::truncate();
        Customer::truncate();
        Company::truncate();
        CompanyBranchOffice::truncate();
        \App\CompanyBranchOfficeAddress::truncate();
        Property::truncate();



         $this->call(UserTableSeeder::class);
         $this->call(CompanyTableSeeder::class);
         $this->call(PropertyTableSeeder::class);
    }
}
