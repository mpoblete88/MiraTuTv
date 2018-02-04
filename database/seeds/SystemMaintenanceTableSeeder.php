<?php

use Illuminate\Database\Seeder;
use App\Model\System\SystemMaintenance;
class SystemMaintenanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSystemMaintenance();
    }



    public function createSystemMaintenance()
{
    $system = ([
        ['inactive', 'title','sub title', '#ffffff', '#00000', '#00000', '#00000', 'Pagina en mantencion, ya estaremos de vuelta', 'Footer', 'font_family'],

    ]);


    for ($i = 0; $i < count($system); $i++) {

        SystemMaintenance::create([
            'status'            => $system[ $i ][0],
            'title'             => $system[ $i ][1],
            'subtitle'         => $system[ $i ][2],
            'background_color'  => $system[ $i ][3],
            'title_color'       => $system[ $i ][4],
            'subtitle_color'    => $system[ $i ][5],
            'footer_text_color' => $system[ $i ][6],
            'description'       => $system[ $i ][7],
            'footer'            => $system[ $i ][8],
            'font_family'       => $system[ $i ][9]
        ]);


    }
}
}
