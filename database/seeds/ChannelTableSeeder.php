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
        //['name','code','status',[hd/sd]]


        {
            $this->createChannel();
        }
    }


    public function createChannel()
    {
        $nacional_hd = ([
            ['Canal 13', '813', 'active','HD'],
            ['Chilevision', '811', 'active','HD'],
            ['La Red', '804', 'active','HD'],
            ['Mega', '809', 'active','HD'],
            ['TVN', '807', 'active','HD'],
            ['UCV', '805', 'active','HD'],

        ]);

        $nacional_sd = ([
            ['Canal 13', '122', 'active','SD'],
            ['Chilevision', '121', 'active','SD'],
            ['La Red', '117', 'active','SD'],
            ['Mega', '120', 'active','SD'],
            ['TVN', '119', 'active','SD'],
            ['UCV', '118', 'active','SD'],
            ['Telecanal', '116', 'active','SD'],
            ['13 C', '125', 'active','SD'],
            ['TV Senado', '425', 'active','SD'],
            ['TV Diputados', '426', 'active','SD'],

        ]);


        $musica_hd = ([
            ['MTV', '866', 'active','HD'],
            ['MTV LIVE', '905', 'active','HD'],
            ['STINGRAY', '907', 'active','HD'],
            ['Telehit', '906', 'active','HD'],
            ['VH1', '908', 'active','HD'],

        ]);

        $musica_sd = ([
            ['MTV', '387', 'active','SD'],
            ['HTV', '389', 'active','SD'],
            ['VIA X', '124', 'active','SD'],
            ['Zona Latina', '123', 'active','SD'],
            ['VH1 Megahits', '388', 'active','SD'],

        ]);


        $noticias_hd = ([
            ['Canal 24 Horas', '816', 'active','HD'],
            ['CNN Chile', '817', 'active','HD'],

        ]);

        $noticias_sd = ([
            ['24 Horas', '423', 'active','SD'],
            ['CNN Chile', '424', 'active','SD'],
            ['CNN Español', '401', 'active','SD'],
            ['CNN Internacional', '403', 'active','SD'],
            ['BBC World News', '402', 'active','SD'],

        ]);

        $culturales_hd = ([
            ['History Channel', '832', 'active','HD'],
            ['National Geographic', '833', 'active','HD'],
            ['Discovery', '834', 'active','HD'],
            ['Nat Geo Wild', '835', 'active','HD'],
            ['H2', '837', 'active','HD'],
            ['Animal Planet', '838', 'active','HD'],
            ['Discovery Theater', '831', 'active','HD'],

        ]);

        $culturales_sd = ([
            ['Animal Planet', '350', 'active','SD'],
            ['Discovery Channel', '351', 'active','SD'],
            ['National Geographic', '352', 'active','SD'],
            ['H2', '353', 'active','SD'],
            ['History Channel', '354', 'active','SD'],
            ['Nat Geo Wild', '361', 'active','SD'],
            ['Discovery Turbo', '713', 'active','SD'],

        ]);

        $deportes_hd = ([
            ['ESPN 2 Channel', '886', 'active','HD'],
            ['ESPN 3 Channel', '887', 'active','HD'],
            ['ESPN Channel', '884', 'active','HD'],
            ['ESPN +', '885', 'active','HD'],
            ['Formula 1', '897', 'active','HD'],
            ['GolTV', '894', 'active','HD'],
            ['TyC Sports', '893', 'active','HD'],


        ]);


        $deportes_sd = ([
            ['ESPN', '480', 'active','SD'],
            ['ESPN 2', '482', 'active','SD'],
            ['ESPN 3', '495', 'active','SD'],
            ['FOX Sports', '483', 'active','SD'],
            ['FOX Sports 3', '479', 'active','SD'],
            ['Teletrak', '477', 'active','SD'],
            ['CDF Basico', '484', 'active','SD'],
            ['CDO Basico', '493', 'active','SD'],


        ]);

        $internacionales_hd = ([
            ['ATRES Series', '862', 'active','HD'],
            ['Canal de las Estrellas', '846', 'active','HD'],
            ['Discovery World', '841', 'active','HD'],
            ['HOLA! TV', '845', 'active','HD'],
            ['Fashion One', '844', 'active','HD'],
            ['Food Network', '839', 'active','HD'],
            ['Sun Channel', '848', 'active','HD'],


        ]);

        $internacionales_sd = ([
            ['Canal de las Estrellas', '375', 'active','SD'],
            ['Antena 3', '435', 'active','SD'],
            ['TVE', '434', 'active','SD'],
            ['Glitz*', '376', 'active','SD'],
            ['Deutsche Welle', '438', 'active','SD'],
            ['EWTN', '439', 'active','SD'],
            ['Enlace', '733', 'active','SD'],
            ['Eurochannel', '436', 'active','SD'],
            ['Telefe', '431', 'active','SD'],
            ['Orbe 21', '446', 'active','SD'],
            ['Peru Magico', '432', 'active','SD'],
            ['RAI', '437', 'active','SD'],
            ['REC TV', '126', 'active','SD'],
            ['Telesur', '451', 'active','SD'],
            ['TLC', '356', 'active','SD'],


        ]);

        $infantiles_hd = ([
            ['Cartoon Network', '822', 'active','HD'],
            ['Discovery Kids', '820', 'active','HD'],
            ['Disney Channel', '821', 'active','HD'],
            ['Nickelodeon', '823', 'active','HD'],

        ]);

        $infantiles_sd = ([
            ['Cartoon Network', '301', 'active','SD'],
            ['Discovery Kids', '303', 'active','SD'],
            ['Disney Channel', '304', 'active','SD'],
            ['Disney Junior', '308', 'active','SD'],
            ['Disney XD', '307', 'active','SD'],
            ['Nickelodeon', '302', 'active','SD'],
            ['Baby TV', '309', 'active','SD'],
            ['Boomerang', '306', 'active','SD'],
            ['ETC TV', '310', 'active','SD'],

        ]);


        $peliculas_hd = ([
            ['A&E', '861', 'active','HD'],
            ['AXN', '858', 'active','HD'],
            ['Cinecanal', '872', 'active','HD'],
            ['Cinemax', '876', 'active','HD'],
            ['Comedy Central', '863', 'active','HD'],
            ['DHE', '877', 'active','HD'],
            ['Discovery Home&Health', '840', 'active','HD'],
            ['Film Zone', '874', 'active','HD'],
            ['FOX', '855', 'active','HD'],
            ['FOX Life', '849', 'active','HD'],
            ['FX', '860', 'active','HD'],
            ['Golden', '875', 'active','HD'],
            ['HBO', '920', 'active','HD'],
            ['ID Investigation Discovery', '842', 'active','HD'],
            ['Paramount Channel', '878', 'active','HD'],
            ['Pasiones', '847', 'active','HD'],
            ['Sony', '856', 'active','HD'],
            ['Studio Universal', '880', 'active','HD'],
            ['TBS Very Funny', '864', 'active','HD'],
            ['TNT', '870', 'active','HD'],
            ['TNT Series', '869', 'active','HD'],
            ['Tru tv', '843', 'active','HD'],
            ['Universal Channel', '859', 'active','HD'],
            ['Warner Channel', '857', 'active','HD'],

        ]);

        $peliculas_sd = ([
            ['A&E', '506', 'active','SD'],
            ['AXN', '504', 'active','SD'],
            ['Cinecanal', '615', 'active','SD'],
            ['Cinemax', '616', 'active','SD'],
            ['Comedy Central', '508', 'active','SD'],
            ['Discovery Home&Health', '355', 'active','SD'],
            ['The Film Zone', '606', 'active','SD'],
            ['FOX', '502', 'active','SD'],
            ['FOX Life', '370', 'active','SD'],
            ['FX', '507', 'active','SD'],
            ['Golden', '761', 'active','SD'],
            ['Golden Edge', '612', 'active','SD'],
            ['HBO', '629', 'active','SD'],
            ['ID Investigation Discovery', '372', 'active','SD'],
            ['Paramount Channel', '609', 'active','SD'],
            ['Sony', '503', 'active','SD'],
            ['Studio Universal', '602', 'active','SD'],
            ['TBS Very Funny', '739', 'active','SD'],
            ['TNT', '595', 'active','SD'],
            ['TNT Series', '596', 'active','SD'],
            ['Tru tv', '511', 'active','SD'],
            ['Universal Channel', '510', 'active','SD'],
            ['Warner Channel', '501', 'active','SD'],
            ['E! Entertainment TV', '374', 'active','SD'],
            ['I SAT', '605', 'active','SD'],
            ['INTI Network', '334', 'active','SD'],
            ['Lifetime', '521', 'active','SD'],
            ['Mundo FOX', '505', 'active','SD'],
            ['Space', '604', 'active','SD'],
            ['TCM', '603', 'active','SD'],

        ]);

        for ($i = 0; $i < count($nacional); $i++) {

            Property::create([
                'name'        => $nacional[ $i ][0],
                'code' => $nacional[ $i ][1],
            ]);

        }
    }

}
