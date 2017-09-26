<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::insert('insert into threads (eigandi, title, message) values (?, ?, ?)',
        [1, 'Testing', "TestingBody"]
      );
      DB::insert('insert into threads (eigandi, title, message) values (?, ?, ?)',
        [1, 'Testing2', "TestingBody2"]
      );
      DB::insert('insert into threads (eigandi, title, message) values (?, ?, ?)',
        [1, 'Testing3', "TestingBody3"]
      );
      DB::insert('insert into threads (eigandi, title, message) values (?, ?, ?)',
        [1, 'Testing4', "TestingBody4"]
      );
      DB::insert('insert into threads (eigandi, title, message) values (?, ?, ?)',
        [1, 'Testing5', "TestingBody5"]
      );
    }
}
