<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()->delete();
        Permission::query()->delete();
        User::query()->delete();


        $role1 = Role::create(['name' => 'Super Admin']);

        $permission1 = Permission::create([
            'name' => 'create',
        ]);
        $permission2 = Permission::create([
            'name' => 'update',
        ]);
        $permission3 =  Permission::create([
            'name' => 'index',
        ]);
        $permission4 = Permission::create([
            'name' => 'delete',
        ]);


        $role2 = Role::create(['name' => 'Client']);


        $user = User::create([
            'name' => 'Mai Đức Phúc',
            'email' => 'maiducphuc2001@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user->assignRole($role1);

        $user2 = User::create([
            'name' => 'Mai Đức Phúc AB',
            'email' => 'phuc2001@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user2->givePermissionTo(Permission::all());
    }
}
