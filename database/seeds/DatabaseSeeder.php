<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $todos = ['go to the store', 'Take the trash', 'buy a bed', 'Go for a walk'];

        foreach($todos as $todo){
            DB::table('todos')->insert(['name'=> $todo]);
        }
    }
}
