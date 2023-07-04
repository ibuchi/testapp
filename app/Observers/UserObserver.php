<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\AccountActivated;
use App\Notifications\AccountCreated;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $user->notify(new AccountCreated);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        if ($user->isActive()) {
            $user->notify(new AccountActivated);
        }
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
