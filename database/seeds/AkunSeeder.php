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
            ]

            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
