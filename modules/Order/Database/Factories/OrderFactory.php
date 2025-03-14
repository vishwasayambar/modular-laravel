<?php

namespace Modules\Order\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Order\Models\Order;

/**
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'total_in_cents' => $this->faker->randomFloat(2, 10, 100),
            'status' => array_rand([Order::STATUS_PENDING, Order::STATUS_PROCESSING], 1),
        ];
    }
}
