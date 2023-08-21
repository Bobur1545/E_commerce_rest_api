<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '+9999999',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'first_name' => 'Turdiyeva',
            'last_name' => 'Nargiza',
            'email' => 'Nargiza@gmail.com',
            'phone' => '+998915321545',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('editor');


        $user = User::create([
            'first_name' => 'Abdullayev',
            'last_name' => 'Samandar',
            'email' => 'samandar@gmail.com',
            'phone' => '+998915321547',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('shop-manager');


        $user = User::create([
            'first_name' => 'Ganjayev',
            'last_name' => 'Ziyodulla',
            'email' => 'ziyodulla@gmail.com',
            'phone' => '+998945321547',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('helpdesk-support');


        $user = User::create([
            'first_name' => 'Bobur',
            'last_name' => 'Babajanov',
            'email' => 'bobur@gmail.com',
            'phone' => '+998914321545',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('customer');


        $users = User::factory()->count(10)->create();
        foreach ($users as $user){
            $user->assignRole('customer');
        }
    }
}
