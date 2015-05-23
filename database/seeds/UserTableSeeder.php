<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{



    public function run()
    {

        $faker=Faker::create();
        \DB::table('users')->insert(array(
            'identification'        => '123',
            'name'                  => 'edward',
            'second_name'           => 'hair',
            'last_name'             => 'diaz',
            'second_last_name'      => 'alba',
            'email'                 => 'edwarddiaz92@gmail.com',
            'password'              => \Hash::make('123456'),
            'mobile_phone'          => '4324',
            'phone'                 => '432423',
            'photo'                 => 'perfil.png',
            'role_id'               => '1'
        ));

        for($i=0;$i<100;$i++)
        {
            \DB::table('users')->insert(array(
                'identification'        => $faker->unique()->numberBetween($min = 1000, $max = 9000000),
                'name'                  => $faker->firstName,
                'second_name'           => $faker->name,
                'last_name'             => $faker->lastName,
                'second_last_name'      => $faker->lastName,
                'email'                 => $faker->unique()->email,
                'password'              => \Hash::make('123456'),
                'mobile_phone'          => $faker->phoneNumber,
                'phone'                 => $faker->phoneNumber,
                'photo'                 => 'perfil.png',
                'role_id'               => $faker->randomElement(['1','2','3','4'])
            ));
        }

    }
}