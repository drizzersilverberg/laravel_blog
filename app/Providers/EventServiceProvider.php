<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\ThreadCreated' => [
            'App\Listeners\NotifySubscribers',

            /*
                execute 'php artisan event:generate' to automatically generate ThreadCreated event and NotifySubscribers listener
            */

            'App\Listeners\CheckForSpam',

            /*
                Above line manually inserted after executing 'php artisan make:listener CheckForSpam --event="ThreadCreated"'
            */
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
