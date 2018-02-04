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
        $this->call(CountrySeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CommunesTableSeeder::class);
    }
}
