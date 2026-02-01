<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // Assign default role if none
        if ($user->roles()->count() === 0) {
            $user->assignRole('viewer');
        }

        // Notify admins
        $admins = User::role(['admin', 'super_admin'])->get();
        if ($admins->count() > 0) {
            \Illuminate\Support\Facades\Notification::send($admins, new \App\Notifications\NewUserRegistered($user));
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
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
