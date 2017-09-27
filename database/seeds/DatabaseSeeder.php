<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => "Aleksei Voronin",
        'email' => "aleksei_voronin@gmail.com",
        'password' => bcrypt('password'),
      ]);

      DB::table('threads')->insert([
        ['title' => "TitleSeeder1", 'message' => "BodySeeder1", 'eigandi' => 1],
        ['title' => "TitleSeeder2", 'message' => "BodySeeder2", 'eigandi' => 1],
        ['title' => "TitleSeeder3", 'message' => "BodySeeder3", 'eigandi' => 1],
        ['title' => "TitleSeeder4", 'message' => "BodySeeder4", 'eigandi' => 1],
        ['title' => "TitleSeeder5", 'message' => "BodySeeder5", 'eigandi' => 1]
      ]);
    }
}
