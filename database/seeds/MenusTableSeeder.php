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
                'title' => 'Catalogo',
                'route' => '#',
                'icon' => 'fas fa-circle',
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
                'icon' => 'fas fa-user-secret',
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
                'icon' => 'fas fa-user-plus',
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
                'icon' => 'fas fa-truck',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Mantenimiento',
                'route' => 'system_maintenance.index',
                'icon' => 'fas fa-cogs',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Compañia',
                'route' => 'company.index',
                'icon' => 'fas fa-building',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Sliders',
                'route' => 'sliders.index',
                'icon' => 'fas fa-images',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Sucursales',
                'route' => 'company_branch_office.index',
                'icon' => 'fas fa-briefcase',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Canales',
                'route' => 'channel.index',
                'icon' => 'fas fa-tv',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'title' => 'Planes',
                'route' => 'plan.index',
                'icon' => 'fas fa-asterisk',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'title' => 'Tipos Canales',
                'route' => 'types_channel.index',
                'icon' => 'fas fa-shield-alt',
                'parent_id' => 2,
                'hierarchy' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by_user_id' => NULL,
                'updated_by_user_id' => NULL,
                'deleted_by_user_id' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'title' => 'Categoría Canales',
                'route' => 'category_channel.index',
                'icon' => 'fas fa-bullseye',
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