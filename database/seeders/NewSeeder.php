<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Seongjin",
            "username" => "DG",
            "password" => bcrypt("123")
        ]);


        $petugasAccount = User::where("name", "=", "Seongjin")->first();
        $petugasAccount->assignRole("petugas");
    }
}
