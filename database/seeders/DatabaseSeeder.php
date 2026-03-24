<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@asistencia.local',
        ], [
            'name' => 'Administrador General',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => UserRole::Admin,
        ]);

        User::updateOrCreate([
            'email' => 'operador@asistencia.local',
        ], [
            'name' => 'Operador Base',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => UserRole::Operador,
        ]);
    }
}
