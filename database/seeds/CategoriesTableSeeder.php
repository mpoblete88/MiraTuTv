<?php

    use App\Catalog\Channel;
    use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $this->createCategory();
        }
    }


    public function createCategory()
    {
        $categories = ([
            ['national', 'Canales Nacionales'],
            ['music', 'Canales de Musica'],
            ['news', 'Canales de Noticias'],
            ['cultural', 'Canales Culturales'],
            ['sports', 'Canales de Deporte'],
            ['international', 'Canales Internacionales'],
            ['children', 'Canales Infantiles'],
            ['films', 'Peliculas y Series']
        ]);


        for ($i = 0; $i < count($categories); $i++) {

            \App\Catalog\Category::create([
                'name'        => $categories[ $i ][0],
                'description' => $categories[ $i ][1],
            ]);


        }
    }
}
