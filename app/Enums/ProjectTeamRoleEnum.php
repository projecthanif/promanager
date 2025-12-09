<?php

namespace App\Enums;

enum ProjectTeamRoleEnum: string
{
    case OWNER = 'owner';
    case MANAGER = 'manager';
    case MEMBER = 'member';
}
