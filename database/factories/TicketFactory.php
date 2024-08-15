<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'ticket_event_id' => \App\Models\Event::factory(),
            'ticket_email' => $this->faker->unique()->safeEmail,
            'ticket_phone' => $this->faker->phoneNumber,
            'ticket_price' => $this->faker->numberBetween(10, 100),
            'ticket_order_id' => \App\Models\Order::factory(),
            'ticket_key' => $this->faker->uuid,
            'ticket_ticket_type_id' => \App\Models\TicketType::factory(),
            'ticket_status' => $this->faker->randomElement(['active', 'validated', 'expired', 'cancelled']),
        ];
    }
}