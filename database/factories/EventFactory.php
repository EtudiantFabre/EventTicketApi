<?php

namespace Database\Factories;

use \App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'event_category' => $this->faker->randomElement(['Autre', 'Concert-Spectacle', 'Diner Gala', 'Festival', 'Formation']),
            'event_title' => $this->faker->sentence(3),
            'event_description' => $this->faker->paragraph,
            'event_date' => $this->faker->dateTimeBetween('+1 week', '+1 year'),
            'event_image' => $this->faker->imageUrl(),
            'event_city' => $this->faker->city,
            'event_address' => $this->faker->address,
            'event_status' => $this->faker->randomElement(['upcoming', 'completed', 'cancelled']),
        ];
    }
}