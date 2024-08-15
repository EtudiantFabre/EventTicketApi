<?php

namespace Database\Factories;

use App\Models\OrderIntent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderIntent>
 */
class OrderIntentFactory extends Factory
{
    protected $model = OrderIntent::class;

    public function definition()
    {
        return [
            'order_intent_price' => $this->faker->numberBetween(100, 1000),
            'order_intent_type' => $this->faker->word,
            'user_email' => $this->faker->unique()->safeEmail,
            'user_phone' => $this->faker->phoneNumber,
            'expiration_date' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}