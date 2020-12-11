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
      $user =  App\User::create([
          'name' => 'Mohammed Bayoussef',
          'email' => 'bayoussefismail@gmail.com',
          'password' => bcrypt('heavenking'),
          'admin' => 1
        ]);
        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatars/1.jpg',
          'about' => 'Lorem ipsum dolor sit amet,um',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
