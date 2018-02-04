<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('communes')->delete();
        
        \DB::table('communes')->insert(array (
            0 => 
            array (
                'id' => 1101,
                'name' => 'Iquique',
                'provinces_id' => 11,
            ),
            1 => 
            array (
                'id' => 1107,
                'name' => 'Alto Hospicio',
                'provinces_id' => 11,
            ),
            2 => 
            array (
                'id' => 1401,
                'name' => 'Pozo Almonte',
                'provinces_id' => 14,
            ),
            3 => 
            array (
                'id' => 1402,
                'name' => 'Camiña',
                'provinces_id' => 14,
            ),
            4 => 
            array (
                'id' => 1403,
                'name' => 'Colchane',
                'provinces_id' => 14,
            ),
            5 => 
            array (
                'id' => 1404,
                'name' => 'Huara',
                'provinces_id' => 14,
            ),
            6 => 
            array (
                'id' => 1405,
                'name' => 'Pica',
                'provinces_id' => 14,
            ),
            7 => 
            array (
                'id' => 2101,
                'name' => 'Antofagasta',
                'provinces_id' => 21,
            ),
            8 => 
            array (
                'id' => 2102,
                'name' => 'Mejillones',
                'provinces_id' => 21,
            ),
            9 => 
            array (
                'id' => 2103,
                'name' => 'Sierra Gorda',
                'provinces_id' => 21,
            ),
            10 => 
            array (
                'id' => 2104,
                'name' => 'Taltal',
                'provinces_id' => 21,
            ),
            11 => 
            array (
                'id' => 2201,
                'name' => 'Calama',
                'provinces_id' => 22,
            ),
            12 => 
            array (
                'id' => 2202,
                'name' => 'Ollagüe',
                'provinces_id' => 22,
            ),
            13 => 
            array (
                'id' => 2203,
                'name' => 'San Pedro de Atacama',
                'provinces_id' => 22,
            ),
            14 => 
            array (
                'id' => 2301,
                'name' => 'Tocopilla',
                'provinces_id' => 23,
            ),
            15 => 
            array (
                'id' => 2302,
                'name' => 'María Elena',
                'provinces_id' => 23,
            ),
            16 => 
            array (
                'id' => 3101,
                'name' => 'Copiapó',
                'provinces_id' => 31,
            ),
            17 => 
            array (
                'id' => 3102,
                'name' => 'Caldera',
                'provinces_id' => 31,
            ),
            18 => 
            array (
                'id' => 3103,
                'name' => 'Tierra Amarilla',
                'provinces_id' => 31,
            ),
            19 => 
            array (
                'id' => 3201,
                'name' => 'Chañaral',
                'provinces_id' => 32,
            ),
            20 => 
            array (
                'id' => 3202,
                'name' => 'Diego de Almagro',
                'provinces_id' => 32,
            ),
            21 => 
            array (
                'id' => 3301,
                'name' => 'Vallenar',
                'provinces_id' => 33,
            ),
            22 => 
            array (
                'id' => 3302,
                'name' => 'Alto del Carmen',
                'provinces_id' => 33,
            ),
            23 => 
            array (
                'id' => 3303,
                'name' => 'Freirina',
                'provinces_id' => 33,
            ),
            24 => 
            array (
                'id' => 3304,
                'name' => 'Huasco',
                'provinces_id' => 33,
            ),
            25 => 
            array (
                'id' => 4101,
                'name' => 'La Serena',
                'provinces_id' => 41,
            ),
            26 => 
            array (
                'id' => 4102,
                'name' => 'Coquimbo',
                'provinces_id' => 41,
            ),
            27 => 
            array (
                'id' => 4103,
                'name' => 'Andacollo',
                'provinces_id' => 41,
            ),
            28 => 
            array (
                'id' => 4104,
                'name' => 'La Higuera',
                'provinces_id' => 41,
            ),
            29 => 
            array (
                'id' => 4105,
                'name' => 'Paihuano',
                'provinces_id' => 41,
            ),
            30 => 
            array (
                'id' => 4106,
                'name' => 'Vicuña',
                'provinces_id' => 41,
            ),
            31 => 
            array (
                'id' => 4201,
                'name' => 'Illapel',
                'provinces_id' => 42,
            ),
            32 => 
            array (
                'id' => 4202,
                'name' => 'Canela',
                'provinces_id' => 42,
            ),
            33 => 
            array (
                'id' => 4203,
                'name' => 'Los Vilos',
                'provinces_id' => 42,
            ),
            34 => 
            array (
                'id' => 4204,
                'name' => 'Salamanca',
                'provinces_id' => 42,
            ),
            35 => 
            array (
                'id' => 4301,
                'name' => 'Ovalle',
                'provinces_id' => 43,
            ),
            36 => 
            array (
                'id' => 4302,
                'name' => 'Combarbalá',
                'provinces_id' => 43,
            ),
            37 => 
            array (
                'id' => 4303,
                'name' => 'Monte Patria',
                'provinces_id' => 43,
            ),
            38 => 
            array (
                'id' => 4304,
                'name' => 'Punitaqui',
                'provinces_id' => 43,
            ),
            39 => 
            array (
                'id' => 4305,
                'name' => 'Río Hurtado',
                'provinces_id' => 43,
            ),
            40 => 
            array (
                'id' => 5101,
                'name' => 'Valparaíso',
                'provinces_id' => 51,
            ),
            41 => 
            array (
                'id' => 5102,
                'name' => 'Casablanca',
                'provinces_id' => 51,
            ),
            42 => 
            array (
                'id' => 5103,
                'name' => 'Concón',
                'provinces_id' => 51,
            ),
            43 => 
            array (
                'id' => 5104,
                'name' => 'Juan Fernández',
                'provinces_id' => 51,
            ),
            44 => 
            array (
                'id' => 5105,
                'name' => 'Puchuncaví',
                'provinces_id' => 51,
            ),
            45 => 
            array (
                'id' => 5107,
                'name' => 'Quintero',
                'provinces_id' => 51,
            ),
            46 => 
            array (
                'id' => 5109,
                'name' => 'Viña del Mar',
                'provinces_id' => 51,
            ),
            47 => 
            array (
                'id' => 5201,
                'name' => 'Isla de Pascua',
                'provinces_id' => 52,
            ),
            48 => 
            array (
                'id' => 5301,
                'name' => 'Los Andes',
                'provinces_id' => 53,
            ),
            49 => 
            array (
                'id' => 5302,
                'name' => 'Calle Larga',
                'provinces_id' => 53,
            ),
            50 => 
            array (
                'id' => 5303,
                'name' => 'Rinconada',
                'provinces_id' => 53,
            ),
            51 => 
            array (
                'id' => 5304,
                'name' => 'San Esteban',
                'provinces_id' => 53,
            ),
            52 => 
            array (
                'id' => 5401,
                'name' => 'La Ligua',
                'provinces_id' => 54,
            ),
            53 => 
            array (
                'id' => 5402,
                'name' => 'Cabildo',
                'provinces_id' => 54,
            ),
            54 => 
            array (
                'id' => 5403,
                'name' => 'Papudo',
                'provinces_id' => 54,
            ),
            55 => 
            array (
                'id' => 5404,
                'name' => 'Petorca',
                'provinces_id' => 54,
            ),
            56 => 
            array (
                'id' => 5405,
                'name' => 'Zapallar',
                'provinces_id' => 54,
            ),
            57 => 
            array (
                'id' => 5501,
                'name' => 'Quillota',
                'provinces_id' => 55,
            ),
            58 => 
            array (
                'id' => 5502,
                'name' => 'La Calera',
                'provinces_id' => 55,
            ),
            59 => 
            array (
                'id' => 5503,
                'name' => 'Hijuelas',
                'provinces_id' => 55,
            ),
            60 => 
            array (
                'id' => 5504,
                'name' => 'La Cruz',
                'provinces_id' => 55,
            ),
            61 => 
            array (
                'id' => 5506,
                'name' => 'Nogales',
                'provinces_id' => 55,
            ),
            62 => 
            array (
                'id' => 5601,
                'name' => 'San Antonio',
                'provinces_id' => 56,
            ),
            63 => 
            array (
                'id' => 5602,
                'name' => 'Algarrobo',
                'provinces_id' => 56,
            ),
            64 => 
            array (
                'id' => 5603,
                'name' => 'Cartagena',
                'provinces_id' => 56,
            ),
            65 => 
            array (
                'id' => 5604,
                'name' => 'El Quisco',
                'provinces_id' => 56,
            ),
            66 => 
            array (
                'id' => 5605,
                'name' => 'El Tabo',
                'provinces_id' => 56,
            ),
            67 => 
            array (
                'id' => 5606,
                'name' => 'Santo Domingo',
                'provinces_id' => 56,
            ),
            68 => 
            array (
                'id' => 5701,
                'name' => 'San Felipe',
                'provinces_id' => 57,
            ),
            69 => 
            array (
                'id' => 5702,
                'name' => 'Catemu',
                'provinces_id' => 57,
            ),
            70 => 
            array (
                'id' => 5703,
                'name' => 'Llay Llay',
                'provinces_id' => 57,
            ),
            71 => 
            array (
                'id' => 5704,
                'name' => 'Panquehue',
                'provinces_id' => 57,
            ),
            72 => 
            array (
                'id' => 5705,
                'name' => 'Putaendo',
                'provinces_id' => 57,
            ),
            73 => 
            array (
                'id' => 5706,
                'name' => 'Santa María',
                'provinces_id' => 57,
            ),
            74 => 
            array (
                'id' => 5801,
                'name' => 'Quilpué',
                'provinces_id' => 58,
            ),
            75 => 
            array (
                'id' => 5802,
                'name' => 'Limache',
                'provinces_id' => 58,
            ),
            76 => 
            array (
                'id' => 5803,
                'name' => 'Olmué',
                'provinces_id' => 58,
            ),
            77 => 
            array (
                'id' => 5804,
                'name' => 'Villa Alemana',
                'provinces_id' => 58,
            ),
            78 => 
            array (
                'id' => 6101,
                'name' => 'Rancagua',
                'provinces_id' => 61,
            ),
            79 => 
            array (
                'id' => 6102,
                'name' => 'Codegua',
                'provinces_id' => 61,
            ),
            80 => 
            array (
                'id' => 6103,
                'name' => 'Coinco',
                'provinces_id' => 61,
            ),
            81 => 
            array (
                'id' => 6104,
                'name' => 'Coltauco',
                'provinces_id' => 61,
            ),
            82 => 
            array (
                'id' => 6105,
                'name' => 'Doñihue',
                'provinces_id' => 61,
            ),
            83 => 
            array (
                'id' => 6106,
                'name' => 'Graneros',
                'provinces_id' => 61,
            ),
            84 => 
            array (
                'id' => 6107,
                'name' => 'Las Cabras',
                'provinces_id' => 61,
            ),
            85 => 
            array (
                'id' => 6108,
                'name' => 'Machalí',
                'provinces_id' => 61,
            ),
            86 => 
            array (
                'id' => 6109,
                'name' => 'Malloa',
                'provinces_id' => 61,
            ),
            87 => 
            array (
                'id' => 6110,
                'name' => 'Mostazal',
                'provinces_id' => 61,
            ),
            88 => 
            array (
                'id' => 6111,
                'name' => 'Olivar',
                'provinces_id' => 61,
            ),
            89 => 
            array (
                'id' => 6112,
                'name' => 'Peumo',
                'provinces_id' => 61,
            ),
            90 => 
            array (
                'id' => 6113,
                'name' => 'Pichidegua',
                'provinces_id' => 61,
            ),
            91 => 
            array (
                'id' => 6114,
                'name' => 'Quinta de Tilcoco',
                'provinces_id' => 61,
            ),
            92 => 
            array (
                'id' => 6115,
                'name' => 'Rengo',
                'provinces_id' => 61,
            ),
            93 => 
            array (
                'id' => 6116,
                'name' => 'Requínoa',
                'provinces_id' => 61,
            ),
            94 => 
            array (
                'id' => 6117,
                'name' => 'San Vicente',
                'provinces_id' => 61,
            ),
            95 => 
            array (
                'id' => 6201,
                'name' => 'Pichilemu',
                'provinces_id' => 62,
            ),
            96 => 
            array (
                'id' => 6202,
                'name' => 'La Estrella',
                'provinces_id' => 62,
            ),
            97 => 
            array (
                'id' => 6203,
                'name' => 'Litueche',
                'provinces_id' => 62,
            ),
            98 => 
            array (
                'id' => 6204,
                'name' => 'Marchihue',
                'provinces_id' => 62,
            ),
            99 => 
            array (
                'id' => 6205,
                'name' => 'Navidad',
                'provinces_id' => 62,
            ),
            100 => 
            array (
                'id' => 6206,
                'name' => 'Paredones',
                'provinces_id' => 62,
            ),
            101 => 
            array (
                'id' => 6301,
                'name' => 'San Fernando',
                'provinces_id' => 63,
            ),
            102 => 
            array (
                'id' => 6302,
                'name' => 'Chépica',
                'provinces_id' => 63,
            ),
            103 => 
            array (
                'id' => 6303,
                'name' => 'Chimbarongo',
                'provinces_id' => 63,
            ),
            104 => 
            array (
                'id' => 6304,
                'name' => 'Lolol',
                'provinces_id' => 63,
            ),
            105 => 
            array (
                'id' => 6305,
                'name' => 'Nancagua',
                'provinces_id' => 63,
            ),
            106 => 
            array (
                'id' => 6306,
                'name' => 'Palmilla',
                'provinces_id' => 63,
            ),
            107 => 
            array (
                'id' => 6307,
                'name' => 'Peralillo',
                'provinces_id' => 63,
            ),
            108 => 
            array (
                'id' => 6308,
                'name' => 'Placilla',
                'provinces_id' => 63,
            ),
            109 => 
            array (
                'id' => 6309,
                'name' => 'Pumanque',
                'provinces_id' => 63,
            ),
            110 => 
            array (
                'id' => 6310,
                'name' => 'Santa Cruz',
                'provinces_id' => 63,
            ),
            111 => 
            array (
                'id' => 7101,
                'name' => 'Talca',
                'provinces_id' => 71,
            ),
            112 => 
            array (
                'id' => 7102,
                'name' => 'Constitución',
                'provinces_id' => 71,
            ),
            113 => 
            array (
                'id' => 7103,
                'name' => 'Curepto',
                'provinces_id' => 71,
            ),
            114 => 
            array (
                'id' => 7104,
                'name' => 'Empedrado',
                'provinces_id' => 71,
            ),
            115 => 
            array (
                'id' => 7105,
                'name' => 'Maule',
                'provinces_id' => 71,
            ),
            116 => 
            array (
                'id' => 7106,
                'name' => 'Pelarco',
                'provinces_id' => 71,
            ),
            117 => 
            array (
                'id' => 7107,
                'name' => 'Pencahue',
                'provinces_id' => 71,
            ),
            118 => 
            array (
                'id' => 7108,
                'name' => 'Río Claro',
                'provinces_id' => 71,
            ),
            119 => 
            array (
                'id' => 7109,
                'name' => 'San Clemente',
                'provinces_id' => 71,
            ),
            120 => 
            array (
                'id' => 7110,
                'name' => 'San Rafael',
                'provinces_id' => 71,
            ),
            121 => 
            array (
                'id' => 7201,
                'name' => 'Cauquenes',
                'provinces_id' => 72,
            ),
            122 => 
            array (
                'id' => 7202,
                'name' => 'Chanco',
                'provinces_id' => 72,
            ),
            123 => 
            array (
                'id' => 7203,
                'name' => 'Pelluhue',
                'provinces_id' => 72,
            ),
            124 => 
            array (
                'id' => 7301,
                'name' => 'Curicó',
                'provinces_id' => 73,
            ),
            125 => 
            array (
                'id' => 7302,
                'name' => 'Hualañé',
                'provinces_id' => 73,
            ),
            126 => 
            array (
                'id' => 7303,
                'name' => 'Licantén',
                'provinces_id' => 73,
            ),
            127 => 
            array (
                'id' => 7304,
                'name' => 'Molina',
                'provinces_id' => 73,
            ),
            128 => 
            array (
                'id' => 7305,
                'name' => 'Rauco',
                'provinces_id' => 73,
            ),
            129 => 
            array (
                'id' => 7306,
                'name' => 'Romeral',
                'provinces_id' => 73,
            ),
            130 => 
            array (
                'id' => 7307,
                'name' => 'Sagrada Familia',
                'provinces_id' => 73,
            ),
            131 => 
            array (
                'id' => 7308,
                'name' => 'Teno',
                'provinces_id' => 73,
            ),
            132 => 
            array (
                'id' => 7309,
                'name' => 'Vichuquén',
                'provinces_id' => 73,
            ),
            133 => 
            array (
                'id' => 7401,
                'name' => 'Linares',
                'provinces_id' => 74,
            ),
            134 => 
            array (
                'id' => 7402,
                'name' => 'Colbún',
                'provinces_id' => 74,
            ),
            135 => 
            array (
                'id' => 7403,
                'name' => 'Longaví',
                'provinces_id' => 74,
            ),
            136 => 
            array (
                'id' => 7404,
                'name' => 'Parral',
                'provinces_id' => 74,
            ),
            137 => 
            array (
                'id' => 7405,
                'name' => 'Retiro',
                'provinces_id' => 74,
            ),
            138 => 
            array (
                'id' => 7406,
                'name' => 'San Javier',
                'provinces_id' => 74,
            ),
            139 => 
            array (
                'id' => 7407,
                'name' => 'Villa Alegre',
                'provinces_id' => 74,
            ),
            140 => 
            array (
                'id' => 7408,
                'name' => 'Yerbas Buenas',
                'provinces_id' => 74,
            ),
            141 => 
            array (
                'id' => 8101,
                'name' => 'Concepción',
                'provinces_id' => 81,
            ),
            142 => 
            array (
                'id' => 8102,
                'name' => 'Coronel',
                'provinces_id' => 81,
            ),
            143 => 
            array (
                'id' => 8103,
                'name' => 'Chiguayante',
                'provinces_id' => 81,
            ),
            144 => 
            array (
                'id' => 8104,
                'name' => 'Florida',
                'provinces_id' => 81,
            ),
            145 => 
            array (
                'id' => 8105,
                'name' => 'Hualqui',
                'provinces_id' => 81,
            ),
            146 => 
            array (
                'id' => 8106,
                'name' => 'Lota',
                'provinces_id' => 81,
            ),
            147 => 
            array (
                'id' => 8107,
                'name' => 'Penco',
                'provinces_id' => 81,
            ),
            148 => 
            array (
                'id' => 8108,
                'name' => 'San Pedro de la Paz',
                'provinces_id' => 81,
            ),
            149 => 
            array (
                'id' => 8109,
                'name' => 'Santa Juana',
                'provinces_id' => 81,
            ),
            150 => 
            array (
                'id' => 8110,
                'name' => 'Talcahuano',
                'provinces_id' => 81,
            ),
            151 => 
            array (
                'id' => 8111,
                'name' => 'Tomé',
                'provinces_id' => 81,
            ),
            152 => 
            array (
                'id' => 8112,
                'name' => 'Hualpén',
                'provinces_id' => 81,
            ),
            153 => 
            array (
                'id' => 8201,
                'name' => 'Lebu',
                'provinces_id' => 82,
            ),
            154 => 
            array (
                'id' => 8202,
                'name' => 'Arauco',
                'provinces_id' => 82,
            ),
            155 => 
            array (
                'id' => 8203,
                'name' => 'Cañete',
                'provinces_id' => 82,
            ),
            156 => 
            array (
                'id' => 8204,
                'name' => 'Contulmo',
                'provinces_id' => 82,
            ),
            157 => 
            array (
                'id' => 8205,
                'name' => 'Curanilahue',
                'provinces_id' => 82,
            ),
            158 => 
            array (
                'id' => 8206,
                'name' => 'Los Álamos',
                'provinces_id' => 82,
            ),
            159 => 
            array (
                'id' => 8207,
                'name' => 'Tirúa',
                'provinces_id' => 82,
            ),
            160 => 
            array (
                'id' => 8301,
                'name' => 'Los Ángeles',
                'provinces_id' => 83,
            ),
            161 => 
            array (
                'id' => 8302,
                'name' => 'Antuco',
                'provinces_id' => 83,
            ),
            162 => 
            array (
                'id' => 8303,
                'name' => 'Cabrero',
                'provinces_id' => 83,
            ),
            163 => 
            array (
                'id' => 8304,
                'name' => 'Laja',
                'provinces_id' => 83,
            ),
            164 => 
            array (
                'id' => 8305,
                'name' => 'Mulchén',
                'provinces_id' => 83,
            ),
            165 => 
            array (
                'id' => 8306,
                'name' => 'Nacimiento',
                'provinces_id' => 83,
            ),
            166 => 
            array (
                'id' => 8307,
                'name' => 'Negrete',
                'provinces_id' => 83,
            ),
            167 => 
            array (
                'id' => 8308,
                'name' => 'Quilaco',
                'provinces_id' => 83,
            ),
            168 => 
            array (
                'id' => 8309,
                'name' => 'Quilleco',
                'provinces_id' => 83,
            ),
            169 => 
            array (
                'id' => 8310,
                'name' => 'San Rosendo',
                'provinces_id' => 83,
            ),
            170 => 
            array (
                'id' => 8311,
                'name' => 'Santa Bárbara',
                'provinces_id' => 83,
            ),
            171 => 
            array (
                'id' => 8312,
                'name' => 'Tucapel',
                'provinces_id' => 83,
            ),
            172 => 
            array (
                'id' => 8313,
                'name' => 'Yumbel',
                'provinces_id' => 83,
            ),
            173 => 
            array (
                'id' => 8314,
                'name' => 'Alto Biobío',
                'provinces_id' => 83,
            ),
            174 => 
            array (
                'id' => 8401,
                'name' => 'Chillán',
                'provinces_id' => 163,
            ),
            175 => 
            array (
                'id' => 8402,
                'name' => 'Bulnes',
                'provinces_id' => 163,
            ),
            176 => 
            array (
                'id' => 8403,
                'name' => 'Cobquecura',
                'provinces_id' => 162,
            ),
            177 => 
            array (
                'id' => 8404,
                'name' => 'Coelemu',
                'provinces_id' => 162,
            ),
            178 => 
            array (
                'id' => 8405,
                'name' => 'Coihueco',
                'provinces_id' => 163,
            ),
            179 => 
            array (
                'id' => 8406,
                'name' => 'Chillán Viejo',
                'provinces_id' => 163,
            ),
            180 => 
            array (
                'id' => 8407,
                'name' => 'El Carmen',
                'provinces_id' => 163,
            ),
            181 => 
            array (
                'id' => 8408,
                'name' => 'Ninhue',
                'provinces_id' => 162,
            ),
            182 => 
            array (
                'id' => 8409,
                'name' => 'Ñiquén',
                'provinces_id' => 161,
            ),
            183 => 
            array (
                'id' => 8410,
                'name' => 'Pemuco',
                'provinces_id' => 163,
            ),
            184 => 
            array (
                'id' => 8411,
                'name' => 'Pinto',
                'provinces_id' => 163,
            ),
            185 => 
            array (
                'id' => 8412,
                'name' => 'Portezuelo',
                'provinces_id' => 162,
            ),
            186 => 
            array (
                'id' => 8413,
                'name' => 'Quillón',
                'provinces_id' => 162,
            ),
            187 => 
            array (
                'id' => 8414,
                'name' => 'Quirihue',
                'provinces_id' => 162,
            ),
            188 => 
            array (
                'id' => 8415,
                'name' => 'Ránquil',
                'provinces_id' => 162,
            ),
            189 => 
            array (
                'id' => 8416,
                'name' => 'San Carlos',
                'provinces_id' => 161,
            ),
            190 => 
            array (
                'id' => 8417,
                'name' => 'San Fabián',
                'provinces_id' => 161,
            ),
            191 => 
            array (
                'id' => 8418,
                'name' => 'San Ignacio',
                'provinces_id' => 163,
            ),
            192 => 
            array (
                'id' => 8419,
                'name' => 'San Nicolás',
                'provinces_id' => 161,
            ),
            193 => 
            array (
                'id' => 8420,
                'name' => 'Treguaco',
                'provinces_id' => 162,
            ),
            194 => 
            array (
                'id' => 8421,
                'name' => 'Yungay',
                'provinces_id' => 163,
            ),
            195 => 
            array (
                'id' => 9101,
                'name' => 'Temuco',
                'provinces_id' => 91,
            ),
            196 => 
            array (
                'id' => 9102,
                'name' => 'Carahue',
                'provinces_id' => 91,
            ),
            197 => 
            array (
                'id' => 9103,
                'name' => 'Cunco',
                'provinces_id' => 91,
            ),
            198 => 
            array (
                'id' => 9104,
                'name' => 'Curarrehue',
                'provinces_id' => 91,
            ),
            199 => 
            array (
                'id' => 9105,
                'name' => 'Freire',
                'provinces_id' => 91,
            ),
            200 => 
            array (
                'id' => 9106,
                'name' => 'Galvarino',
                'provinces_id' => 91,
            ),
            201 => 
            array (
                'id' => 9107,
                'name' => 'Gorbea',
                'provinces_id' => 91,
            ),
            202 => 
            array (
                'id' => 9108,
                'name' => 'Lautaro',
                'provinces_id' => 91,
            ),
            203 => 
            array (
                'id' => 9109,
                'name' => 'Loncoche',
                'provinces_id' => 91,
            ),
            204 => 
            array (
                'id' => 9110,
                'name' => 'Melipeuco',
                'provinces_id' => 91,
            ),
            205 => 
            array (
                'id' => 9111,
                'name' => 'Nueva Imperial',
                'provinces_id' => 91,
            ),
            206 => 
            array (
                'id' => 9112,
                'name' => 'Padre las Casas',
                'provinces_id' => 91,
            ),
            207 => 
            array (
                'id' => 9113,
                'name' => 'Perquenco',
                'provinces_id' => 91,
            ),
            208 => 
            array (
                'id' => 9114,
                'name' => 'Pitrufquén',
                'provinces_id' => 91,
            ),
            209 => 
            array (
                'id' => 9115,
                'name' => 'Pucón',
                'provinces_id' => 91,
            ),
            210 => 
            array (
                'id' => 9116,
                'name' => 'Saavedra',
                'provinces_id' => 91,
            ),
            211 => 
            array (
                'id' => 9117,
                'name' => 'Teodoro Schmidt',
                'provinces_id' => 91,
            ),
            212 => 
            array (
                'id' => 9118,
                'name' => 'Toltén',
                'provinces_id' => 91,
            ),
            213 => 
            array (
                'id' => 9119,
                'name' => 'Vilcún',
                'provinces_id' => 91,
            ),
            214 => 
            array (
                'id' => 9120,
                'name' => 'Villarrica',
                'provinces_id' => 91,
            ),
            215 => 
            array (
                'id' => 9121,
                'name' => 'Cholchol',
                'provinces_id' => 91,
            ),
            216 => 
            array (
                'id' => 9201,
                'name' => 'Angol',
                'provinces_id' => 92,
            ),
            217 => 
            array (
                'id' => 9202,
                'name' => 'Collipulli',
                'provinces_id' => 92,
            ),
            218 => 
            array (
                'id' => 9203,
                'name' => 'Curacautín',
                'provinces_id' => 92,
            ),
            219 => 
            array (
                'id' => 9204,
                'name' => 'Ercilla',
                'provinces_id' => 92,
            ),
            220 => 
            array (
                'id' => 9205,
                'name' => 'Lonquimay',
                'provinces_id' => 92,
            ),
            221 => 
            array (
                'id' => 9206,
                'name' => 'Los Sauces',
                'provinces_id' => 92,
            ),
            222 => 
            array (
                'id' => 9207,
                'name' => 'Lumaco',
                'provinces_id' => 92,
            ),
            223 => 
            array (
                'id' => 9208,
                'name' => 'Purén',
                'provinces_id' => 92,
            ),
            224 => 
            array (
                'id' => 9209,
                'name' => 'Renaico',
                'provinces_id' => 92,
            ),
            225 => 
            array (
                'id' => 9210,
                'name' => 'Traiguén',
                'provinces_id' => 92,
            ),
            226 => 
            array (
                'id' => 9211,
                'name' => 'Victoria',
                'provinces_id' => 92,
            ),
            227 => 
            array (
                'id' => 10101,
                'name' => 'Puerto Montt',
                'provinces_id' => 101,
            ),
            228 => 
            array (
                'id' => 10102,
                'name' => 'Calbuco',
                'provinces_id' => 101,
            ),
            229 => 
            array (
                'id' => 10103,
                'name' => 'Cochamó',
                'provinces_id' => 101,
            ),
            230 => 
            array (
                'id' => 10104,
                'name' => 'Fresia',
                'provinces_id' => 101,
            ),
            231 => 
            array (
                'id' => 10105,
                'name' => 'Frutillar',
                'provinces_id' => 101,
            ),
            232 => 
            array (
                'id' => 10106,
                'name' => 'Los Muermos',
                'provinces_id' => 101,
            ),
            233 => 
            array (
                'id' => 10107,
                'name' => 'Llanquihue',
                'provinces_id' => 101,
            ),
            234 => 
            array (
                'id' => 10108,
                'name' => 'Maullín',
                'provinces_id' => 101,
            ),
            235 => 
            array (
                'id' => 10109,
                'name' => 'Puerto Varas',
                'provinces_id' => 101,
            ),
            236 => 
            array (
                'id' => 10201,
                'name' => 'Castro',
                'provinces_id' => 102,
            ),
            237 => 
            array (
                'id' => 10202,
                'name' => 'Ancud',
                'provinces_id' => 102,
            ),
            238 => 
            array (
                'id' => 10203,
                'name' => 'Chonchi',
                'provinces_id' => 102,
            ),
            239 => 
            array (
                'id' => 10204,
                'name' => 'Curaco de Vélez',
                'provinces_id' => 102,
            ),
            240 => 
            array (
                'id' => 10205,
                'name' => 'Dalcahue',
                'provinces_id' => 102,
            ),
            241 => 
            array (
                'id' => 10206,
                'name' => 'Puqueldón',
                'provinces_id' => 102,
            ),
            242 => 
            array (
                'id' => 10207,
                'name' => 'Queilén',
                'provinces_id' => 102,
            ),
            243 => 
            array (
                'id' => 10208,
                'name' => 'Quellón',
                'provinces_id' => 102,
            ),
            244 => 
            array (
                'id' => 10209,
                'name' => 'Quemchi',
                'provinces_id' => 102,
            ),
            245 => 
            array (
                'id' => 10210,
                'name' => 'Quinchao',
                'provinces_id' => 102,
            ),
            246 => 
            array (
                'id' => 10301,
                'name' => 'Osorno',
                'provinces_id' => 103,
            ),
            247 => 
            array (
                'id' => 10302,
                'name' => 'Puerto Octay',
                'provinces_id' => 103,
            ),
            248 => 
            array (
                'id' => 10303,
                'name' => 'Purranque',
                'provinces_id' => 103,
            ),
            249 => 
            array (
                'id' => 10304,
                'name' => 'Puyehue',
                'provinces_id' => 103,
            ),
            250 => 
            array (
                'id' => 10305,
                'name' => 'Río Negro',
                'provinces_id' => 103,
            ),
            251 => 
            array (
                'id' => 10306,
                'name' => 'San Juan de la Costa',
                'provinces_id' => 103,
            ),
            252 => 
            array (
                'id' => 10307,
                'name' => 'San Pablo',
                'provinces_id' => 103,
            ),
            253 => 
            array (
                'id' => 10401,
                'name' => 'Chaitén',
                'provinces_id' => 104,
            ),
            254 => 
            array (
                'id' => 10402,
                'name' => 'Futaleufú',
                'provinces_id' => 104,
            ),
            255 => 
            array (
                'id' => 10403,
                'name' => 'Hualaihué',
                'provinces_id' => 104,
            ),
            256 => 
            array (
                'id' => 10404,
                'name' => 'Palena',
                'provinces_id' => 104,
            ),
            257 => 
            array (
                'id' => 11101,
                'name' => 'Coyhaique',
                'provinces_id' => 111,
            ),
            258 => 
            array (
                'id' => 11102,
                'name' => 'Lago Verde',
                'provinces_id' => 111,
            ),
            259 => 
            array (
                'id' => 11201,
                'name' => 'Aysén',
                'provinces_id' => 112,
            ),
            260 => 
            array (
                'id' => 11202,
                'name' => 'Cisnes',
                'provinces_id' => 112,
            ),
            261 => 
            array (
                'id' => 11203,
                'name' => 'Guaitecas',
                'provinces_id' => 112,
            ),
            262 => 
            array (
                'id' => 11301,
                'name' => 'Cochrane',
                'provinces_id' => 113,
            ),
            263 => 
            array (
                'id' => 11302,
                'name' => 'O\'Higgins',
                'provinces_id' => 113,
            ),
            264 => 
            array (
                'id' => 11303,
                'name' => 'Tortel',
                'provinces_id' => 113,
            ),
            265 => 
            array (
                'id' => 11401,
                'name' => 'Chile Chico',
                'provinces_id' => 114,
            ),
            266 => 
            array (
                'id' => 11402,
                'name' => 'Río Ibáñez',
                'provinces_id' => 114,
            ),
            267 => 
            array (
                'id' => 12101,
                'name' => 'Punta Arenas',
                'provinces_id' => 121,
            ),
            268 => 
            array (
                'id' => 12102,
                'name' => 'Laguna Blanca',
                'provinces_id' => 121,
            ),
            269 => 
            array (
                'id' => 12103,
                'name' => 'Río Verde',
                'provinces_id' => 121,
            ),
            270 => 
            array (
                'id' => 12104,
                'name' => 'San Gregorio',
                'provinces_id' => 121,
            ),
            271 => 
            array (
                'id' => 12201,
                'name' => 'Cabo de Hornos',
                'provinces_id' => 122,
            ),
            272 => 
            array (
                'id' => 12202,
                'name' => 'Antártica',
                'provinces_id' => 122,
            ),
            273 => 
            array (
                'id' => 12301,
                'name' => 'Porvenir',
                'provinces_id' => 123,
            ),
            274 => 
            array (
                'id' => 12302,
                'name' => 'Primavera',
                'provinces_id' => 123,
            ),
            275 => 
            array (
                'id' => 12303,
                'name' => 'Timaukel',
                'provinces_id' => 123,
            ),
            276 => 
            array (
                'id' => 12401,
                'name' => 'Natales',
                'provinces_id' => 124,
            ),
            277 => 
            array (
                'id' => 12402,
                'name' => 'Torres del Paine',
                'provinces_id' => 124,
            ),
            278 => 
            array (
                'id' => 13101,
                'name' => 'Santiago',
                'provinces_id' => 131,
            ),
            279 => 
            array (
                'id' => 13102,
                'name' => 'Cerrillos',
                'provinces_id' => 131,
            ),
            280 => 
            array (
                'id' => 13103,
                'name' => 'Cerro Navia',
                'provinces_id' => 131,
            ),
            281 => 
            array (
                'id' => 13104,
                'name' => 'Conchalí',
                'provinces_id' => 131,
            ),
            282 => 
            array (
                'id' => 13105,
                'name' => 'El Bosque',
                'provinces_id' => 131,
            ),
            283 => 
            array (
                'id' => 13106,
                'name' => 'Estación Central',
                'provinces_id' => 131,
            ),
            284 => 
            array (
                'id' => 13107,
                'name' => 'Huechuraba',
                'provinces_id' => 131,
            ),
            285 => 
            array (
                'id' => 13108,
                'name' => 'Independencia',
                'provinces_id' => 131,
            ),
            286 => 
            array (
                'id' => 13109,
                'name' => 'La Cisterna',
                'provinces_id' => 131,
            ),
            287 => 
            array (
                'id' => 13110,
                'name' => 'La Florida',
                'provinces_id' => 131,
            ),
            288 => 
            array (
                'id' => 13111,
                'name' => 'La Granja',
                'provinces_id' => 131,
            ),
            289 => 
            array (
                'id' => 13112,
                'name' => 'La Pintana',
                'provinces_id' => 131,
            ),
            290 => 
            array (
                'id' => 13113,
                'name' => 'La Reina',
                'provinces_id' => 131,
            ),
            291 => 
            array (
                'id' => 13114,
                'name' => 'Las Condes',
                'provinces_id' => 131,
            ),
            292 => 
            array (
                'id' => 13115,
                'name' => 'Lo Barnechea',
                'provinces_id' => 131,
            ),
            293 => 
            array (
                'id' => 13116,
                'name' => 'Lo Espejo',
                'provinces_id' => 131,
            ),
            294 => 
            array (
                'id' => 13117,
                'name' => 'Lo Prado',
                'provinces_id' => 131,
            ),
            295 => 
            array (
                'id' => 13118,
                'name' => 'Macul',
                'provinces_id' => 131,
            ),
            296 => 
            array (
                'id' => 13119,
                'name' => 'Maipú',
                'provinces_id' => 131,
            ),
            297 => 
            array (
                'id' => 13120,
                'name' => 'Ñuñoa',
                'provinces_id' => 131,
            ),
            298 => 
            array (
                'id' => 13121,
                'name' => 'Pedro Aguirre Cerda',
                'provinces_id' => 131,
            ),
            299 => 
            array (
                'id' => 13122,
                'name' => 'Peñalolén',
                'provinces_id' => 131,
            ),
            300 => 
            array (
                'id' => 13123,
                'name' => 'Providencia',
                'provinces_id' => 131,
            ),
            301 => 
            array (
                'id' => 13124,
                'name' => 'Pudahuel',
                'provinces_id' => 131,
            ),
            302 => 
            array (
                'id' => 13125,
                'name' => 'Quilicura',
                'provinces_id' => 131,
            ),
            303 => 
            array (
                'id' => 13126,
                'name' => 'Quinta Normal',
                'provinces_id' => 131,
            ),
            304 => 
            array (
                'id' => 13127,
                'name' => 'Recoleta',
                'provinces_id' => 131,
            ),
            305 => 
            array (
                'id' => 13128,
                'name' => 'Renca',
                'provinces_id' => 131,
            ),
            306 => 
            array (
                'id' => 13129,
                'name' => 'San Joaquín',
                'provinces_id' => 131,
            ),
            307 => 
            array (
                'id' => 13130,
                'name' => 'San Miguel',
                'provinces_id' => 131,
            ),
            308 => 
            array (
                'id' => 13131,
                'name' => 'San Ramón',
                'provinces_id' => 131,
            ),
            309 => 
            array (
                'id' => 13132,
                'name' => 'Vitacura',
                'provinces_id' => 131,
            ),
            310 => 
            array (
                'id' => 13201,
                'name' => 'Puente Alto',
                'provinces_id' => 132,
            ),
            311 => 
            array (
                'id' => 13202,
                'name' => 'Pirque',
                'provinces_id' => 132,
            ),
            312 => 
            array (
                'id' => 13203,
                'name' => 'San José de Maipo',
                'provinces_id' => 132,
            ),
            313 => 
            array (
                'id' => 13301,
                'name' => 'Colina',
                'provinces_id' => 133,
            ),
            314 => 
            array (
                'id' => 13302,
                'name' => 'Lampa',
                'provinces_id' => 133,
            ),
            315 => 
            array (
                'id' => 13303,
                'name' => 'Tiltil',
                'provinces_id' => 133,
            ),
            316 => 
            array (
                'id' => 13401,
                'name' => 'San Bernardo',
                'provinces_id' => 134,
            ),
            317 => 
            array (
                'id' => 13402,
                'name' => 'Buin',
                'provinces_id' => 134,
            ),
            318 => 
            array (
                'id' => 13403,
                'name' => 'Calera de Tango',
                'provinces_id' => 134,
            ),
            319 => 
            array (
                'id' => 13404,
                'name' => 'Paine',
                'provinces_id' => 134,
            ),
            320 => 
            array (
                'id' => 13501,
                'name' => 'Melipilla',
                'provinces_id' => 135,
            ),
            321 => 
            array (
                'id' => 13502,
                'name' => 'Alhué',
                'provinces_id' => 135,
            ),
            322 => 
            array (
                'id' => 13503,
                'name' => 'Curacaví',
                'provinces_id' => 135,
            ),
            323 => 
            array (
                'id' => 13504,
                'name' => 'María Pinto',
                'provinces_id' => 135,
            ),
            324 => 
            array (
                'id' => 13505,
                'name' => 'San Pedro',
                'provinces_id' => 135,
            ),
            325 => 
            array (
                'id' => 13601,
                'name' => 'Talagante',
                'provinces_id' => 136,
            ),
            326 => 
            array (
                'id' => 13602,
                'name' => 'El Monte',
                'provinces_id' => 136,
            ),
            327 => 
            array (
                'id' => 13603,
                'name' => 'Isla de Maipo',
                'provinces_id' => 136,
            ),
            328 => 
            array (
                'id' => 13604,
                'name' => 'Padre Hurtado',
                'provinces_id' => 136,
            ),
            329 => 
            array (
                'id' => 13605,
                'name' => 'Peñaflor',
                'provinces_id' => 136,
            ),
            330 => 
            array (
                'id' => 14101,
                'name' => 'Valdivia',
                'provinces_id' => 141,
            ),
            331 => 
            array (
                'id' => 14102,
                'name' => 'Corral',
                'provinces_id' => 141,
            ),
            332 => 
            array (
                'id' => 14103,
                'name' => 'Lanco',
                'provinces_id' => 141,
            ),
            333 => 
            array (
                'id' => 14104,
                'name' => 'Los Lagos',
                'provinces_id' => 141,
            ),
            334 => 
            array (
                'id' => 14105,
                'name' => 'Máfil',
                'provinces_id' => 141,
            ),
            335 => 
            array (
                'id' => 14106,
                'name' => 'Mariquina',
                'provinces_id' => 141,
            ),
            336 => 
            array (
                'id' => 14107,
                'name' => 'Paillaco',
                'provinces_id' => 141,
            ),
            337 => 
            array (
                'id' => 14108,
                'name' => 'Panguipulli',
                'provinces_id' => 141,
            ),
            338 => 
            array (
                'id' => 14201,
                'name' => 'La Unión',
                'provinces_id' => 142,
            ),
            339 => 
            array (
                'id' => 14202,
                'name' => 'Futrono',
                'provinces_id' => 142,
            ),
            340 => 
            array (
                'id' => 14203,
                'name' => 'Lago Ranco',
                'provinces_id' => 142,
            ),
            341 => 
            array (
                'id' => 14204,
                'name' => 'Río Bueno',
                'provinces_id' => 142,
            ),
            342 => 
            array (
                'id' => 15101,
                'name' => 'Arica',
                'provinces_id' => 151,
            ),
            343 => 
            array (
                'id' => 15102,
                'name' => 'Camarones',
                'provinces_id' => 151,
            ),
            344 => 
            array (
                'id' => 15201,
                'name' => 'Putre',
                'provinces_id' => 152,
            ),
            345 => 
            array (
                'id' => 15202,
                'name' => 'General Lagos',
                'provinces_id' => 152,
            ),
            346 => 
            array (
                'id' => 15203,
                'name' => 'Amazonas',
                'provinces_id' => 164,
            ),
            347 => 
            array (
                'id' => 15204,
                'name' => 'Ancash',
                'provinces_id' => 164,
            ),
            348 => 
            array (
                'id' => 15205,
                'name' => 'Apurímac',
                'provinces_id' => 164,
            ),
            349 => 
            array (
                'id' => 15206,
                'name' => 'Arequipa',
                'provinces_id' => 164,
            ),
            350 => 
            array (
                'id' => 15207,
                'name' => 'Ayacucho',
                'provinces_id' => 164,
            ),
            351 => 
            array (
                'id' => 15208,
                'name' => 'Cajamarca',
                'provinces_id' => 164,
            ),
            352 => 
            array (
                'id' => 15209,
                'name' => 'Callao',
                'provinces_id' => 164,
            ),
            353 => 
            array (
                'id' => 15210,
                'name' => 'Cusco',
                'provinces_id' => 164,
            ),
            354 => 
            array (
                'id' => 15211,
                'name' => 'Huancavelica',
                'provinces_id' => 164,
            ),
            355 => 
            array (
                'id' => 15212,
                'name' => 'Huánuco',
                'provinces_id' => 164,
            ),
            356 => 
            array (
                'id' => 15213,
                'name' => 'Ica',
                'provinces_id' => 164,
            ),
            357 => 
            array (
                'id' => 15214,
                'name' => 'Junín',
                'provinces_id' => 164,
            ),
            358 => 
            array (
                'id' => 15215,
                'name' => 'La Libertad',
                'provinces_id' => 164,
            ),
            359 => 
            array (
                'id' => 15216,
                'name' => 'Lambayeque',
                'provinces_id' => 164,
            ),
            360 => 
            array (
                'id' => 15217,
                'name' => 'Lima',
                'provinces_id' => 164,
            ),
            361 => 
            array (
                'id' => 15218,
                'name' => 'Loreto',
                'provinces_id' => 164,
            ),
            362 => 
            array (
                'id' => 15219,
                'name' => 'Madre de Dios',
                'provinces_id' => 164,
            ),
            363 => 
            array (
                'id' => 15220,
                'name' => 'Moquegua',
                'provinces_id' => 164,
            ),
            364 => 
            array (
                'id' => 15221,
                'name' => 'Pasco',
                'provinces_id' => 164,
            ),
            365 => 
            array (
                'id' => 15222,
                'name' => 'Piura',
                'provinces_id' => 164,
            ),
            366 => 
            array (
                'id' => 15223,
                'name' => 'Puno',
                'provinces_id' => 164,
            ),
            367 => 
            array (
                'id' => 15224,
                'name' => 'San Martín',
                'provinces_id' => 164,
            ),
            368 => 
            array (
                'id' => 15225,
                'name' => 'Tacna',
                'provinces_id' => 164,
            ),
            369 => 
            array (
                'id' => 15226,
                'name' => 'Tumbes',
                'provinces_id' => 164,
            ),
            370 => 
            array (
                'id' => 15227,
                'name' => 'Ucayali',
                'provinces_id' => 164,
            ),
        ));
        
        
    }
}