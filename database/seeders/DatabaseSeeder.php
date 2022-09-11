<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Currency\Database\Seeders\CurrencyDatabaseSeeder;
use Modules\Product\Database\Seeders\ProductDatabaseSeeder;
use Modules\Setting\Database\Seeders\SettingDatabaseSeeder;
use Modules\User\Database\Seeders\PermissionsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Herdi',
        //     'email' => 'marketing@dku.id',
        //     'password' => Hash::make('Mekikau19'),
        // ]);

        $this->call(PermissionsTableSeeder::class);
        $this->call(SuperUserSeeder::class);
        // $this->call(CurrencyDatabaseSeeder::class);
        // $this->call(SettingDatabaseSeeder::class);
        // $this->call(ProductDatabaseSeeder::class);
    }
}
