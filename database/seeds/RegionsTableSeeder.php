<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('regions')->delete();

        \DB::table('regions')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Tarapacá',
                    'ISO_3166_2_CL' => 'CL-TA',
                    'countries_id' => 43,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Antofagasta',
                    'ISO_3166_2_CL' => 'CL-AN',
                    'countries_id' => 43,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Atacama',
                    'ISO_3166_2_CL' => 'CL-AT',
                    'countries_id' => 43,

                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Coquimbo',
                    'ISO_3166_2_CL' => 'CL-CO',
                    'countries_id' => 43,

                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Valparaíso',
                    'ISO_3166_2_CL' => 'CL-VS',
                    'countries_id' => 43,

                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Región del Libertador Gral. Bernardo O Higgin',
                    'ISO_3166_2_CL' => 'CL-LI',
                    'countries_id' => 43,

                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Región del Maule',
                    'ISO_3166_2_CL' => 'CL-ML',
                    'countries_id' => 43,

                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Región del Biobío',
                    'ISO_3166_2_CL' => 'CL-BI',
                    'countries_id' => 43,

                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Región de la Araucanía',
                    'ISO_3166_2_CL' => 'CL-AR',
                    'countries_id' => 43,

                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Región de Los Lagos',
                    'ISO_3166_2_CL' => 'CL-LL',
                    'countries_id' => 43,

                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Región Aisén del Gral. Carlos Ibáñez del Camp',
                    'ISO_3166_2_CL' => 'CL-AI',
                    'countries_id' => 43,

                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Región de Magallanes y de la Antártica Chilen',
                    'ISO_3166_2_CL' => 'CL-MA',
                    'countries_id' => 43,

                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Región Metropolitana de Santiago',
                    'ISO_3166_2_CL' => 'CL-RM',
                    'countries_id' => 43,

                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Región de Los Ríos',
                    'ISO_3166_2_CL' => 'CL-LR',
                    'countries_id' => 43,

                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Arica y Parinacota',
                    'ISO_3166_2_CL' => 'CL-AP',
                    'countries_id' => 43,

                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Región de Ñuble',
                    'ISO_3166_2_CL' => '',
                    'countries_id' => 43,

                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'Peru',
                    'ISO_3166_2_CL' => 'Peru',
                    'countries_id' => 168,

                ),
        ));


    }
}