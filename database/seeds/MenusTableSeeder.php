<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Usuarios',
                'route' => '#',
                'icon' => 'fa fa-user',
                'parent_id' => NULL,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Administradores',
                'route' => 'app_admins.index',
                'icon' => 'fa fa-circle-o',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Clientes',
                'route' => 'app_customers.index',
                'icon' => 'fa fa-circle-o',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Vendedores',
                'route' => 'users.index',
                'icon' => 'fa fa-circle-o',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
        ));
        
        
    }
}