<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'John Doe',
            'institutions_id' => 1,
            'from' => 'Sekolah',
            'phonenumber' => '0867947134',
            'email' => 'johndoe@example.com',
            'note' => 'test'
        ]);
    }
}
