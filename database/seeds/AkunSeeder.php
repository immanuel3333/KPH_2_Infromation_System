<?php

use Illuminate\Database\Seeder;
use App\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= [
            [
            'name' => 'adminupt',
            'nip' => '12345678',
            'email' => 'marchelsitumorang2000@gmail.com',
            'password' => bcrypt('12345678'),
            'level' => 'adminupt'
            ],
            [
                'name' => 'adminunit',
                'nip' => '123456789',
                'email' => 'josemarchelsitumorang@gmail.com',
                'password' => bcrypt('123456789'),
                'level' => 'adminunit'
            ],
            [
                'name' => 'adminunit2',
                'nip' => '123456782',
                'email' => 'adminunitbatubara@gmail.com',
                'password' => bcrypt('123456782'),
                'level' => 'adminunit2'
            ],
            [
                'name' => 'adminunit3',
                'nip' => '123456783',
                'email' => 'adminunitsergai@gmail.com',
                'password' => bcrypt('123456783'),
                'level' => 'adminunit3'
            ],
            [
                'name' => 'adminunit4',
                'nip' => '123456784',
                'email' => 'adminunit12simalungun@gmail.com',
                'password' => bcrypt('123456784'),
                'level' => 'adminunit4'
            ]

            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
