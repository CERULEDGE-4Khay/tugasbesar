<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class MentorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'name' => $this->faker->name,
        'specialty' => $this->faker->randomElement([
            'Chord Dasar & Strumming',
            'Fingerstyle & Improvisasi',
            'Teknik Petikan & Solo',
            'Belajar Lagu Populer',
        ]),
        'bio' => $this->faker->sentence(10),
        'photo' => 'https://i.pravatar.cc/150?img=' . $this->faker->numberBetween(1, 70),
    ];
}

}
