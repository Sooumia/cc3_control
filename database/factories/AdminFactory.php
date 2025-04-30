<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'name' => 'admin', // nom par défaut
            'email' => 'admin@gmail.com', // email par défaut
            'password' => Hash::make('Admin12345'), // mot de passe par défaut, haché
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
