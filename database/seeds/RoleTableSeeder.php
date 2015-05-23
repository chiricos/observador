<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('roles')->insert(array(
            'id' => '1',
            'name' => 'super administrator'
        ));
        \DB::table('roles')->insert(array(
            'id' => '2',
            'name' => 'administrator'
        ));
        \DB::table('roles')->insert(array(
            'id' => '3',
            'name' => 'technicians'
        ));
        \DB::table('roles')->insert(array(
            'id' => '4',
            'name' => 'clients'
        ));
    }

}