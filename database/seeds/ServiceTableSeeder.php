<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createService();
    }



    public function createService()
    {
        $services = ([
            ['BASICO 10', 'B', '', '14500'],
            ['BASICO 20', 'BB', '', '19000'],
            ['BASICO 30', 'BBB', '', '23500'],
            ['CINE 10', 'C', '', '20000'],
            ['CINE 20', 'CB', '', '24500'],
            ['CINE 30', 'CBB', '', '29000'],
            ['CINE 21', 'CC', '', '30000'],
            ['CINE 31', 'CCB', '', '34500'],
            ['CINE 32', 'CCC', '', '40000'],
            ['FUTBOL 10', 'F', '', '21000'],
            ['FUTBOL 20', 'FB', '', '25500'],
            ['FUTBOL 30', 'FBB', '', '30000'],
            ['FUTBOL 21', 'FF', '', '31000'],
            ['FUTBOL 31', 'FFB', '', '35500'],
            ['FUTBOL 32', 'FFF', '', '41000'],
            ['TOTAL 10', 'T', '', '25000'],
            ['TOTAL 20', 'TB', '', '29500'],
            ['TOTAL 30', 'TBB', '', '34000'],
            ['TOTAL 21', 'TT', '', '40000'],
            ['TOTAL 31', 'TTB', '', '44500'],
            ['TOTAL 32', 'TTT', '', '55000'],

        ]);


        for ($i = 0; $i < count($services); $i++) {

            $service = new \App\Model\Catalog\Service();
            $service->name = $services[ $i ][0];
            $service->code = $services[ $i ][1];
            $service->description = $services[ $i ][2];
            $service->save();

            $code_explode = str_split($service->code);

            $plan_id_map = ['B'=>1,'F'=>2,'C'=>3,'T'=>4];


            foreach ($code_explode as $plan_short_name)
            {
                $service_plans = new \App\Model\Catalog\ServicePlan();
                $service_plans->service_id = $service->id;
                $service_plans->plan_id = $plan_id_map[$plan_short_name];
                $service_plans->save();


            }

            $service_price = new \App\Model\Catalog\ServicePrice();
            $service_price->service_id = $service->id;
            $service_price->price = $services[ $i ][3];
            $service_price->save();




        }
    }
}
