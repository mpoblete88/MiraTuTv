<?php

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPlan();
    }



    public function createPlan()
    {
        $plans = ([
            ['BASE', 'Plan Base','B'],
            ['FUTBOL', 'Plan Futbol', 'F'],
            ['CINE', 'Plan Cine','C'],
            ['TOTAL', 'Plan Total','T'],

        ]);


        for ($i = 0; $i < count($plans); $i++) {

            \App\Catalog\Plan::create([
                'name'        => $plans[ $i ][0],
                'description' => $plans[ $i ][1],
                'code'        => $plans[ $i ][2],
            ]);


        }
    }
}
