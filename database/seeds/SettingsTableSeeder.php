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
          'site_name'=>"Laravel's Blog",
          'address' =>'Russian, dhuriwada malwan no i m from england hmm',
          'contact_number'=>'9876543210',
          'contact_email'=>'info@gmail.com'


        ]);
    }
}
