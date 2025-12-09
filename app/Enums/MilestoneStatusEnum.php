<?php

namespace App\Enums;

enum MilestoneStatusEnum: string
{
    case PENDING = 'pending';
    case INPROGRESS = 'in_progress';
    case COMPLETED = 'completed';
}
