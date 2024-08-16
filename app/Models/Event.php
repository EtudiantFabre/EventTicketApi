<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_category',
        'event_title',
        'event_description',
        'event_date',
        'event_image',
        'event_city',
        'event_address',
        'event_status',
    ];

    /**
     * Get the tickets for the event.
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_event_id', 'event_id');
    }

    /**
     * Get the ticket types for the event.
     */
    public function ticketTypes()
    {
        return $this->hasMany(TicketType::class, 'ticket_type_event_id', 'event_id');
    }

    /**
     * Get the orders for the event.
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'order_event_id', 'event_id');
    }
}
