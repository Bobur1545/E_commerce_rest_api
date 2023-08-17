<?php

namespace Database\Seeders;

use App\Enums\SettingType;
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
        $setting = Setting::create([
            'name' => [
                'uz' => 'Til',
                'ru' => 'Язык'
            ],

            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "O'zbekcha",
                'ru' => "Узбекский"
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "Ruscha",
                'ru' => "Русский"
            ]
        ]);



        $setting = Setting::create([
            'name' => [
                'uz' => 'Pul birligi',
                'ru' => 'Валюта'
            ],

            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "O'zbek so'mi",
                'ru' => "Узбекский сум"
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "AQSH dollari",
                'ru' => "доллар США"
            ]
        ]);


        $setting = Setting::create([
            'name' => [
                'uz' => 'Dark mode',
                'ru' => 'Темный режим'
            ],

            'type' => SettingType::SWITCH->value,
        ]);


        $setting = Setting::create([
            'name' => [
                'uz' => 'Xabarnomalar',
                'ru' => 'Уведомления'
            ],

            'type' => SettingType::SWITCH->value,
        ]);
    }
}
