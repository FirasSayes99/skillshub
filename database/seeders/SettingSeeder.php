<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email'=>'contact@skillshub.com',
'phone'=>'+9720595747702',
'facebook'=>'www.facebook.com',
'youtube'=>'',
'instagram'=>'',
'telegram'=>'',
'Twitter'=>'',
'linkedin'=>''
        ]);
    }
}
