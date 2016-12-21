<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 100)->create();

      $usr =[
        'userName' => 'fabioman',
        'firstName' => 'fabio',
        'lastName' => 'marques',
        'email' => 'fabioman.damotama@gmail.com',
        'phoneNumber' => '123456',
        'facebookURL' => 'http://www.google.com',
        'isPersonalDataVisiblle' => '1',
        'isAdmin' => '1',
        'position' => 'officier',
        'status' => 'actif',
        'internationalRebelLegionURL' => 'http://www.google.com',
        'avatarURL' => null,
        'password' => bcrypt('123456')
      ];
      DB::table('users')->insert($usr);
    }
}
