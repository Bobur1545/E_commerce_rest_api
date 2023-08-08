<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::find(2)->addresses()->create([
            'latitude' => '41.2365',
            'longitude' => '25.3254',
            'region' => 'Xorazm',
            'district' => 'Urganch shahar',
            'street' => 'A.Baxodirxon',
            'home' => '6'
        ]);

        User::find(2)->addresses()->create([
            'latitude' => '41.2365',
            'longitude' => '25.3254',
            'region' => 'Xorazm',
            'district' => 'Urganch tuman',
            'street' => 'Oq oltin',
            'home' => '6'
        ]);
    }
}
