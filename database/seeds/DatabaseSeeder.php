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
        \App\Catalog\Channel::truncate();
        \App\Catalog\Category::truncate();
        \App\Catalog\Type::truncate();
        \App\Catalog\Plan::truncate();
        \App\Catalog\Service::truncate();
        \App\SystemMaintenance::truncate();



         $this->call(UserTableSeeder::class);
         $this->call(CompanyTableSeeder::class);
         $this->call(PropertyTableSeeder::class);
         $this->call(ChannelTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(TypeTableSeeder::class);
         $this->call(PlanTableSeeder::class);
         $this->call(ServiceTableSeeder::class);
         $this->call(SystemMaintenanceTableSeeder::class);
        $this->call(MenusTableSeeder::class);
    }
}
