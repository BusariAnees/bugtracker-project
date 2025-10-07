<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['open','in_progress','resolved','closed']),
            'severity' => $this->faker->randomElement(['low','medium','high','critical']),
            'assigned_to' => null,
            'reporter_id' => null,
        ];
    }
}
