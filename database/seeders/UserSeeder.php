<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Role::create([
         'name' => 'admin',
         ]);
         Role::create([
         'name' => 'user',
         ]);

         $admin = User::create([
         'name' => 'Rafli Firdaus Falaka',
         'email' => 'raflifirdausfalaka@gmail.com',
         'password' => bcrypt('rafliPUTR;'),
         ]);
         $admin->assignRole('admin');

         $admin = User::create([
         'name' => 'Ahmad Zairosi',
         'email' => 'ahmadzairosi@gmail.com',
         'password' => bcrypt('rosiPUTR;'),
         ]);
         $admin->assignRole('admin');

         $user = User::create([
         'name' => 'Anonymous',
         'email' => 'user@gmail.com',
         'password' => bcrypt('userPUTR;'),
         ]);
         $user->assignRole('user');
    }
}
