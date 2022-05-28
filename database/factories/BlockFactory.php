<?php

namespace Database\Factories;

use App\Models\Block;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Block> */
class BlockFactory extends Factory
{
    protected $model = Block::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->sha256(),
            'public_key' => $this->faker->unique()->sha256(),
            'height' => $this->faker->randomNumber(),
            'date' => Carbon::parse($this->faker->date()),
            'signature' => $this->faker->unique()->sha256(),
            'difficulty' => $this->faker->randomNumber(),
            'argon' => $this->faker->sha256(),
            'transactions' => $this->faker->randomNumber(),
        ];
    }
}
