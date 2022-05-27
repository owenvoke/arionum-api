<?php

namespace Database\Factories;

use App\Models\Masternode;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Masternode> */
class MasternodeFactory extends Factory
{
    protected $model = Masternode::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'public_key' => $this->faker->unique()->sha256(),
            'height' => $this->faker->randomNumber(),
            'ip' => $this->faker->ipv4(),
            'last_won' => $this->faker->randomNumber(),
            'blacklist' => $this->faker->randomNumber(),
            'fails' => $this->faker->randomNumber(),
            'status' => $this->faker->randomNumber(),
        ];
    }
}
