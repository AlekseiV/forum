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

      DB::table('leikstjori')->insert([
        ['nafn' => "Ragnar P Ragnarsson", 'thjoderni' => "Ísland"],
        ['nafn' => "James Gatz", 'thjoderni' => "England"],
        ['nafn' => "Beggi Helga", 'thjoderni' => "Ísland"],
        ['nafn' => "W.C Bartek", 'thjoderni' => "Kanada"],
        ['nafn' => "Wibe Lund", 'thjoderni' => "Danmörk"]
      ]);

      DB::table('dvd')->insert([
        ['titill' => "Vindurinn er blautur", 'adalleikari' => "Pétur Selland", "utgafuar" => 1973, "verd" => 2500, "flokkur" => "Spenna", "leikstjori_id" => 5],
        ['titill' => "Veiðideilan er frábær", 'adalleikari' => "Gústaf Gústafsson", "utgafuar" => 1999, "verd" => 3550, "flokkur" => "Sport", "leikstjori_id" => 1],
        ['titill' => "Into the wild", 'adalleikari' => "John Johnsson", "utgafuar" => 2003, "verd" => 3770, "flokkur" => "Drama", "leikstjori_id" => 4],
        ['titill' => "The Stinder", 'adalleikari' => "Biff Holmes", "utgafuar" => 1969, "verd" => 4520, "flokkur" => "Ævintýri", "leikstjori_id" => 2]
      ]);

    }
}
