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
        DB::table('users')->insert([
            'name' => 'yuichi',
            'email' => 'yuichkun@gmail.com',
            'password' => bcrypt('password'),
        ]);
        
        // factory(App\User::class, 50)->create();
        factory(App\User::class, 50)->create()->each(function ($user){
            $user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
