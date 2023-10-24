<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Summary;
use App\Models\Header;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'Damar',
            'email' => 'damar@gmail.com',
            'password' => bcrypt('damar'),
            'role' => 'user'
        ]);

        Summary::create([
            'nama' => 'Cabang',
            'jumlah' => '12',
            'image' => 'summary/3.png',
            
        ]);
        Summary::create([
            'nama' => 'Anggota',
            'jumlah' => '16.800',
            'image' => 'summary/1.png',

        ]);
        Summary::create([
            'nama' => 'Staff & AO',
            'jumlah' => '206',
            'image' => 'summary/5.png',

        ]);
        Summary::create([
            'nama' => 'Outstanding',
            'jumlah' => '17.158M',
            'image' => 'summary/4.png',

        ]);
        Summary::create([
            'nama' => 'Angsuran Lancar',
            'jumlah' => '86.25%',
            'image' => 'summary/2.png',
        ]);
    }
}
