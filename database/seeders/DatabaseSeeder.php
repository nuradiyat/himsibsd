<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // dan ini tidak menggunakan model User karena kita tidak ingin memicu event yang ada di model User seperti creating, created, updating, updated, deleting, deleted, dll
        // Create default users tidak menggunakan factory karena kita ingin menentukan email dan passwordnya
        // passwordnya di hash menggunakan bcrypt agar aman
        DB::table('users')->insert([
            [
                'name' => 'Admin BPH',
                'email' => 'bph@hims.id',
                'password' => Hash::make('ADMINBPH'),
                'role' => 'bph',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Koordinator RSDM',
                'email' => 'koorrsdm@hims.id',
                'password' => Hash::make('ADMINKOOR'),
                'role' => 'koor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Koordinator PENDIDIKAN',
                'email' => 'koorpendidikan@hims.id',
                'password' => Hash::make('ADMINKOOR'),
                'role' => 'koor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Koordinator LITBANG',
                'email' => 'koorlitbang@hims.id',
                'password' => Hash::make('ADMINKOOR'),
                'role' => 'koor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Koordinator KOMINFO',
                'email' => 'koorkominfo@hims.id',
                'password' => Hash::make('ADMINKOOR'),
                'role' => 'koor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Demisioner',
                'email' => 'demis@hims.id',
                'password' => Hash::make('DEMIS'),
                'role' => 'demis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MABA',
                'email' => 'user@hims.id',
                'password' => Hash::make('MABA'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
