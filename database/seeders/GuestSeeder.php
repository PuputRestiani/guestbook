<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest;
use App\Models\Institution;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create(['name' => 'Perusahaan']);
        Institution::create(['name' => 'Dinas']);
        Institution::create(['name' => 'Sekolah']);

        Guest::factory(1000)->create();

        // Guest::create([
        //     'fullname' => 'John Doe',
        //     'institutions_id' => 1,
        //     'from' => 'Sekolah',
        //     'phonenumber' => '0867947134',
        //     'email' => 'johndoe@example.com',
        //     'note' => 'test'
        // ]);

        // Guest::create([
        //     'fullname' => 'Puput Restiani',
        //     'institutions_id' => 1,
        //     'from' => 'PKL BIM',
        //     'phonenumber' => '8t4924202',
        //     'email' => 'puputrestiani@example.com',
        //     'note' => 'test'
        // ]);
    }
}
