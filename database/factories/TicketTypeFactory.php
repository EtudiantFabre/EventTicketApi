<?php

namespace Database\Factories;

use App\Models\TicketType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketType>
 */
class TicketTypeFactory extends Factory
{
    protected $model = TicketType::class;

    public function definition()
    {
        return [
            'ticket_type_event_id' => \App\Models\Event::factory(),
            'ticket_type_name' => $this->faker->word,
            'ticket_type_price' => $this->faker->numberBetween(10, 100),
            'ticket_type_quantity' => $this->faker->numberBetween(50, 200),
            'ticket_type_real_quantity' => $this->faker->numberBetween(50, 200),
            'ticket_type_total_quantity' => $this->faker->numberBetween(50, 200),
            'ticket_type_description' => $this->faker->paragraph,
        ];
    }
}