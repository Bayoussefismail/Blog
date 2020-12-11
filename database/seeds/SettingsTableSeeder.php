<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
          'site_name' => "Ouarzazate's blog",
          'address' =>  'default address',
          'contact_number' => '0762868577',
          'contact_email' => 'bayoussefismail@gmail.com'
        ]);
    }
}
