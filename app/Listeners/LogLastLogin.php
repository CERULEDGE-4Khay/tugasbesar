<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;

class LogLastLogin
{
    /**
     * Handle the event.
     */
   public function handle(Login $event): void
    {   
     Log::info('User login:', ['id' => $event->user->id]);
    /** @var \App\Models\User $user */
    $user = $event->user;

    $user->update([
        'last_login_at' => now(),
    ]);
    }

}

?>