<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'order_number' => $this->faker->unique()->numerify('ORD-#####'),
            'order_event_id' => \App\Models\Event::factory(),
            'order_price' => $this->faker->numberBetween(100, 1000),
            'order_type' => $this->faker->word,
            'order_payment' => $this->faker->creditCardType,
            'order_info' => $this->faker->paragraph,
        ];
    }
}