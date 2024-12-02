<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'My Blog'],
            ['key' => 'site_description', 'value' => 'Welcome to my blog!'],
            ['key' => 'contact_email', 'value' => 'contact@myblog.com'],
            ['key' => 'phone_number', 'value' => '+905064569496'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
