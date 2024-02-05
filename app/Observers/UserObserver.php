<?php

namespace App\Observers;

use App\Models\User\User;

class UserObserver
{
    public function created(User $user): void
    {

    }

    public function updated(User $user): void
    {
    }

    public function deleted(User $user): void
    {
    }
}
