<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Guests;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guests>
 */
class GuestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companies = [
            'PT Maju Bersama',
            'CV Karya Utama',
            'PT Sentosa Abadi',
            'PT Bumi Sejahtera',
            'CV Makmur Jaya',
        ];

        return [
            'nama' => fake('id_ID')->name(),
            'pimpinan' => $companies[array_rand($companies)],
            'link' => fake()->url(),
            'qr_code' => null,
        ];
    }
}
