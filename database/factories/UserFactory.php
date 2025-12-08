<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role_id' => 3, // utilisateur normal
            'sexe' => $this->faker->randomElement(['M', 'F']),
            'langue_id' => 1,
            'date_inscription' => now(),
            'date_naissance' => $this->faker->date(),
            'statut' => 'actif'
        ];
    }
}
