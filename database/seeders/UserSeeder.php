<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at'  => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now()
        ])->assignRole('pertugas');

        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
