<?php

use Illuminate\Database\Seeder;

class CostumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Costume::class, 100)->create();
    }
}
