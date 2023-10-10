<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        Schema::disableForeignKeyConstraints();
//        User::truncate();

        $admin = User::create([
            'name' => 'Super Admin',
//            'username' => 'superadmin',
            'email' => 'superadmin@omniditech.com',
            'password' => Hash::make('123456789'),
        ]);

        $member = User::create([
            'name' => 'Member',
//            'username' => 'superadmin',
            'email' => 'member@omniditech.com',
            'password' => Hash::make('member'),
        ]);

        $role = Role::findOrCreate('Super Admin');
        $admin->assignRole($role);
//        Schema::enableForeignKeyConstraints();
    }
}
