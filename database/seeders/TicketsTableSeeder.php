<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
        // Create 10 tickets using the factory
        Ticket::factory()->count(10)->create();
    }
}
