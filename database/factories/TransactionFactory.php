<?php

namespace Database\Factories;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Transaction> */
class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->sha256(),
            'block' => fn () => BlockFactory::create()->id,
            'height' => fn () => BlockFactory::create()->height,
            'src' => fn () => AccountFactory::create()->id,
            'dst' => fn () => AccountFactory::create()->id,
            'val' => $this->faker->randomFloat(),
            'fee' => $this->faker->randomFloat(),
            'signature' => $this->faker->unique()->sha256(),
            'version' => $this->faker->randomElement([1, 2, 3, 4]),
            'message' => $this->faker->unique()->sentence(),
            'date' => Carbon::parse($this->faker->date()),
            'public_key' => $this->faker->unique()->sha256(),
        ];
    }
}
