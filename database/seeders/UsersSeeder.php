<?php

namespace Database\Seeders;

use App\Models\User as AdminModel;
use App\Models\Product as ProductModel;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{

    public function run()
    {

        AdminModel::create([

            'name' => 'Qasim Salah',
            'email' => 'q@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('q@gmail.com'),
            'remember_token' => Str::random(10),
        ]);
    }
}
