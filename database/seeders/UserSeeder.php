<?php

namespace Database\Seeders;

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
        User::create([
            'name'=>"Arif",
            'email'=>"arif@example.com",
            'password'=>Hash::make("1234"),
        ]);
        User::create([
            'name'=>"Shohan",
            'email'=>"shohan@example.com",
            'password'=>Hash::make("6789"),
        ]);
    }
}
