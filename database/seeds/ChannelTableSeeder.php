<?php

    use App\Catalog\Channel;
    use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //['name','code','status']


        {
            $this->createChannel();
        }
    }


    public function createChannel()
    {
        $nacional = ([
            ['Canal 13', '813', 'status'],
            ['Chilevision', '811', 'status' ],
            ['La Red', '804', 'status'],
            ['Canal 13', '813', 'status'],

        ]);


        for ($i = 0; $i < count($properties); $i++) {

            Property::create([
                'name'        => $properties[ $i ][0],
                'description' => $properties[ $i ][1],
            ]);

        }
    }

}
