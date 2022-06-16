<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@mail.ru',
            'password' => Hash::make('11111111'),
            'originpassword' => '11111111',
            'role_id' => Role::ADMIN_ID,
        ]);
        User::create([
            'name' => 'arman',
            'email' => 'arman@mail.ru',
            'password' => Hash::make('11111111'),
            'originpassword' => '11111111',
            'role_id' => 5,
        ]);
    }
}
