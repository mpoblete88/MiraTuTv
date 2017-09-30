<?php


    use Illuminate\Database\Seeder;



    class UserTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

            DB::table('users')->insert([
                'first_name' => 'Moises',
                'last_name' => 'Poblete',
                'nick_name' => 'moises.poblete',
                'email' => 'mpoblete@arqz-bim.com',
                'password' => bcrypt('1234'),
                'status' => 'active',
                'remember_token' => str_random(10)
            ]);
            DB::table('admins')->insert([
                'first_name' => 'Edward',
                'last_name' => 'Salas',
                'nick_name' => 'edward.salas',
                'email' => 'esalas@arqz-bim.com',
                'password' => bcrypt('secret'),
                'status' => 'active',
                'remember_token' => str_random(10)
            ]);
            DB::table('customers')->insert([
                'first_name' => 'Marcial',
                'last_name' => 'Olivares',
                'nick_name' => 'marcial.olivares',
                'email' => 'molivares@arqz-bim.com',
                'rut' => '16519728-3',
                'birthdate' => '1987-03-01',
                'password' => bcrypt('client'),
                'status' => 'active',
                'remember_token' => str_random(10)
            ]);



        }
    }
