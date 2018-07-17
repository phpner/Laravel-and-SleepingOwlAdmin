<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
		    'name' => "admin",
		    'email' => 'admin@admin.ru',
		    'password' => bcrypt('123456'),
	        'avatar' => 'images\uploads\avatar.jpg',
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	    ]);

	    DB::table('users')->insert([
		    'name' => "Саня",
		    'email' => 'sa@admin.ru',
		    'password' => bcrypt('123456'),
		    'avatar' => 'images\uploads\avatar.jpg',
		    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	    ]);

	    DB::table('roles')->insert([
		    'id' => "1",
		    'name' => "admin",
		    'label' => 'Administrator',
		    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	    ]);
	    DB::table('roles')->insert([
		    'id' => "2",
		    'name' => "manager",
		    'label' => 'Manager',
		    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	    ]);
	    DB::table('roles')->insert([
		    'id' => "3",
		    'name' => "user",
		    'label' => 'User',
		    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	    ]);

	    $user = \App\User::find(1);

	    $user->roles()->attach(1);

	    $user = \App\User::find(2);

	    $user->roles()->attach(2);
    }
}
