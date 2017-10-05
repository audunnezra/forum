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
        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)' ,
        	['Titill A', 'Body fyrir titil A', 1]);
        
        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)' ,
        	['Titill B', 'Body fyrir titil B', 2]);
    
        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)' ,
        	['Titill C', 'Body fyrir titil C', 3]);
    
        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)' ,
        	['Titill D', 'Body fyrir titil D', 4]);
    }
}
