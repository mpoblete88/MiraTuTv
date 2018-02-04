<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'Iquique',
                'regions_id' => 1,
            ),
            1 => 
            array (
                'id' => 14,
                'name' => 'Tamarugal',
                'regions_id' => 1,
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'Antofagasta',
                'regions_id' => 2,
            ),
            3 => 
            array (
                'id' => 22,
                'name' => 'El Loa',
                'regions_id' => 2,
            ),
            4 => 
            array (
                'id' => 23,
                'name' => 'Tocopilla',
                'regions_id' => 2,
            ),
            5 => 
            array (
                'id' => 31,
                'name' => 'Copiapó',
                'regions_id' => 3,
            ),
            6 => 
            array (
                'id' => 32,
                'name' => 'Chañaral',
                'regions_id' => 3,
            ),
            7 => 
            array (
                'id' => 33,
                'name' => 'Huasco',
                'regions_id' => 3,
            ),
            8 => 
            array (
                'id' => 41,
                'name' => 'Elqui',
                'regions_id' => 4,
            ),
            9 => 
            array (
                'id' => 42,
                'name' => 'Choapa',
                'regions_id' => 4,
            ),
            10 => 
            array (
                'id' => 43,
                'name' => 'Limarí',
                'regions_id' => 4,
            ),
            11 => 
            array (
                'id' => 51,
                'name' => 'Valparaíso',
                'regions_id' => 5,
            ),
            12 => 
            array (
                'id' => 52,
                'name' => 'Isla de Pascua',
                'regions_id' => 5,
            ),
            13 => 
            array (
                'id' => 53,
                'name' => 'Los Andes',
                'regions_id' => 5,
            ),
            14 => 
            array (
                'id' => 54,
                'name' => 'Petorca',
                'regions_id' => 5,
            ),
            15 => 
            array (
                'id' => 55,
                'name' => 'Quillota',
                'regions_id' => 5,
            ),
            16 => 
            array (
                'id' => 56,
                'name' => 'San Antonio',
                'regions_id' => 5,
            ),
            17 => 
            array (
                'id' => 57,
                'name' => 'San Felipe de Aconcagua',
                'regions_id' => 5,
            ),
            18 => 
            array (
                'id' => 58,
                'name' => 'Marga Marga',
                'regions_id' => 5,
            ),
            19 => 
            array (
                'id' => 61,
                'name' => 'Cachapoal',
                'regions_id' => 6,
            ),
            20 => 
            array (
                'id' => 62,
                'name' => 'Cardenal Caro',
                'regions_id' => 6,
            ),
            21 => 
            array (
                'id' => 63,
                'name' => 'Colchagua',
                'regions_id' => 6,
            ),
            22 => 
            array (
                'id' => 71,
                'name' => 'Talca',
                'regions_id' => 7,
            ),
            23 => 
            array (
                'id' => 72,
                'name' => 'Cauquenes',
                'regions_id' => 7,
            ),
            24 => 
            array (
                'id' => 73,
                'name' => 'Curicó',
                'regions_id' => 7,
            ),
            25 => 
            array (
                'id' => 74,
                'name' => 'Linares',
                'regions_id' => 7,
            ),
            26 => 
            array (
                'id' => 81,
                'name' => 'Concepción',
                'regions_id' => 8,
            ),
            27 => 
            array (
                'id' => 82,
                'name' => 'Arauco',
                'regions_id' => 8,
            ),
            28 => 
            array (
                'id' => 83,
                'name' => 'Biobío',
                'regions_id' => 8,
            ),
            29 => 
            array (
                'id' => 91,
                'name' => 'Cautín',
                'regions_id' => 9,
            ),
            30 => 
            array (
                'id' => 92,
                'name' => 'Malleco',
                'regions_id' => 9,
            ),
            31 => 
            array (
                'id' => 101,
                'name' => 'Llanquihue',
                'regions_id' => 10,
            ),
            32 => 
            array (
                'id' => 102,
                'name' => 'Chiloé',
                'regions_id' => 10,
            ),
            33 => 
            array (
                'id' => 103,
                'name' => 'Osorno',
                'regions_id' => 10,
            ),
            34 => 
            array (
                'id' => 104,
                'name' => 'Palena',
                'regions_id' => 10,
            ),
            35 => 
            array (
                'id' => 111,
                'name' => 'Coihaique',
                'regions_id' => 11,
            ),
            36 => 
            array (
                'id' => 112,
                'name' => 'Aisén',
                'regions_id' => 11,
            ),
            37 => 
            array (
                'id' => 113,
                'name' => 'Capitán Prat',
                'regions_id' => 11,
            ),
            38 => 
            array (
                'id' => 114,
                'name' => 'General Carrera',
                'regions_id' => 11,
            ),
            39 => 
            array (
                'id' => 121,
                'name' => 'Magallanes',
                'regions_id' => 12,
            ),
            40 => 
            array (
                'id' => 122,
                'name' => 'Antártica Chilena',
                'regions_id' => 12,
            ),
            41 => 
            array (
                'id' => 123,
                'name' => 'Tierra del Fuego',
                'regions_id' => 12,
            ),
            42 => 
            array (
                'id' => 124,
                'name' => 'Última Esperanza',
                'regions_id' => 12,
            ),
            43 => 
            array (
                'id' => 131,
                'name' => 'Santiago',
                'regions_id' => 13,
            ),
            44 => 
            array (
                'id' => 132,
                'name' => 'Cordillera',
                'regions_id' => 13,
            ),
            45 => 
            array (
                'id' => 133,
                'name' => 'Chacabuco',
                'regions_id' => 13,
            ),
            46 => 
            array (
                'id' => 134,
                'name' => 'Maipo',
                'regions_id' => 13,
            ),
            47 => 
            array (
                'id' => 135,
                'name' => 'Melipilla',
                'regions_id' => 13,
            ),
            48 => 
            array (
                'id' => 136,
                'name' => 'Talagante',
                'regions_id' => 13,
            ),
            49 => 
            array (
                'id' => 141,
                'name' => 'Valdivia',
                'regions_id' => 14,
            ),
            50 => 
            array (
                'id' => 142,
                'name' => 'Ranco',
                'regions_id' => 14,
            ),
            51 => 
            array (
                'id' => 151,
                'name' => 'Arica',
                'regions_id' => 15,
            ),
            52 => 
            array (
                'id' => 152,
                'name' => 'Parinacota',
                'regions_id' => 15,
            ),
            53 => 
            array (
                'id' => 161,
                'name' => 'Punilla',
                'regions_id' => 16,
            ),
            54 => 
            array (
                'id' => 162,
                'name' => 'Itata',
                'regions_id' => 16,
            ),
            55 => 
            array (
                'id' => 163,
                'name' => 'Diguillín',
                'regions_id' => 16,
            ),
            56 => 
            array (
                'id' => 164,
                'name' => 'Peru',
                'regions_id' => 17,
            ),
        ));
        
        
    }
}