<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator',
            'email' => 'marketing@dku.id',
            'password' => Hash::make('Mekikau19'),
            'is_active' => 1
        ]);

        $superAdmin = Role::create([
            'name' => 'Super Admin'
        ]);

        $permissions = Permission::all()->pluck('id')->toArray();
        $superAdmin->givePermissionTo($permissions);

        $user->assignRole($superAdmin);
    }
}
