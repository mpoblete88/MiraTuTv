<?php

use App\Model\Catalog\Property;
use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createProperty();
    }

    public function createProperty()
    {
        $properties = ([
            ['Casa', 'casa'],
            ['Departamento', 'Dpto.'],
            ['Block', 'block'],
            ['Oficina', 'Of.'],

        ]);


        for ($i = 0; $i < count($properties); $i++) {

            Property::create([
                'name' => $properties[$i][0],
                'description' => $properties[$i][1],
            ]);

        }
    }
}
