<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Wallet;
use App\Models\WalletRecurringTransfer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->has(Wallet::factory()->richChillGuy())->create([
            'name' => 'Rich Chill Guy',
            'email' => 'rich.chill.guy@test.fr',
        ]);

        User::factory()->has(Wallet::factory())->create([
            'name' => 'Another Guy',
            'email' => 'another.guy@test.fr',
        ]);

        WalletRecurringTransfer::factory()->create(10);
    }
}
