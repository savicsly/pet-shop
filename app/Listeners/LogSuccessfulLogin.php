<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    public function handle(Login $event): void
    {
        $event->user->last_login_at = now();
        $event->user->last_login_ip = request()->ip();
        $event->user->save();
    }
}
