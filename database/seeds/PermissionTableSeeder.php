<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('permissions')->insert(array(
            'id' => '1',
            'name' => ''
        ));
    }
}