<?php

namespace App\Enums;

enum PhaseStatusEnum: string
{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case COMPLETED = 'completed';
}
