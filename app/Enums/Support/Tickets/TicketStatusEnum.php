<?php

namespace App\Enums\Support\Tickets;

enum TicketStatusEnum: string
{
    const OPEN = 'open';

    const CLOSED = 'closed';

    const PENDING = 'pending';
}
