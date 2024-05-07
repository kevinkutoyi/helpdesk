<?php

namespace App\Services;

use App\Models\Ticket;

class TicketNumberGeneratorService
{
    public function generate(): string
    {
        $prefix = 'TKT-';
        $year = date('Y');
        $sequence = Ticket::max('id') + 1; // Assuming 'id' is the primary key

        return $prefix . $year . '-' . str_pad($sequence, 6, '0', STR_PAD_LEFT);
    }
}
