<?php

use Illuminate\Database\Seeder;
use App\Model\Catalog\Type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $this->createType();
        }
    }


    public function createType()
    {
        $types = ([
            ['SD', 'Standard Digital Television'],
            ['HD', 'High Definition'],

        ]);


        for ($i = 0; $i < count($types); $i++) {

            Type::create([
                'name'       => $types[ $i ][1],
                'short_name' => $types[ $i ][0],
            ]);


        }
    }
}
