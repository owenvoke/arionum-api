<?php

namespace Database\Factories;

use App\Models\Mempool;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Mempool> */
class MempoolFactory extends Factory
{
    protected $model = Mempool::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->sha256(),
            'height' => $this->faker->randomNumber(),
            'src' => fn () => AccountFactory::create()->id,
            'dst' => fn () => AccountFactory::create()->id,
            'val' => $this->faker->randomFloat(),
            'fee' => $this->faker->randomFloat(),
            'signature' => $this->faker->unique()->sha256(),
            'version' => $this->faker->randomElement([1, 2, 3, 4]),
            'message' => $this->faker->unique()->sentence(),
            'public_key' => $this->faker->unique()->sha256(),
            'date' => Carbon::parse($this->faker->date()),
            'peer' => $this->faker->ipv4(),
        ];
    }
}
