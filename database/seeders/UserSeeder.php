<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '+9999999',
            'password' => Hash::make('password'),
        ]);

        $user = User::create([
            'first_name' => 'Bobur',
            'last_name' => 'Babajanov',
            'email' => 'bobur@gmail.com',
            'phone' => '+998914321545',
            'password' => Hash::make('password'),
        ]);
        $admin->roles()->attach(1);
        $user->roles()->attach(2);


        User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
