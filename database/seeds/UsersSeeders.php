<?php

use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'josebarrorojas1998@gmail.com',
                'password' => \Hash::make('10636484'),
                'rol' => 'Administrador',
                'name' => 'Jose Barros',
                'fotografia' => 'foto_base.png',
            ],

            [
                'email' => 'josebarrorojas0298@gmail.com',
                'password' => \Hash::make('123456789'),
                'rol' => 'Vendedor',
                'name' => 'Jose Barros',
                'fotografia' => 'foto_base.png',
            ],
            
        ]);
    }
}
