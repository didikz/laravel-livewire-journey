<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'admin@admin.com',
            'role' => 'admin'
        ]);

        factory(User::class, 10)->create([
            'role' => 'admin'
        ]);

        factory(User::class, 20)->create([
            'role' => 'merchant'
        ]);
    }
}
