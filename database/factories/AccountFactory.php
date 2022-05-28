<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/** @extends Factory<Account> */
class AccountFactory extends Factory
{
    protected $model = Account::class;

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
            'block' => $this->faker->sha256(), // @todo Replace with BlockFactory
            'balance' => $this->faker->randomFloat(),
            'alias' => null,
        ];
    }

    public function withAlias(?string $alias = null): self
    {
        return $this->state(fn (array $attributes) => [
            'alias' => $alias ?? Str::random(8),
        ]);
    }
}
