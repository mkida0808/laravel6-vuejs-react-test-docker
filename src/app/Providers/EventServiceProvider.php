<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // 'App\Events\Laravel6AdvancedShoda\PersonEvent' => [
        //     'App\Listeners\Laravel6AdvancedShoda\PersonEventListener',
        // ],
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

    // protected $subscribe = [
    //     'App\Listeners\Laravel6AdvancedShoda\MyEventSubscriber',
    // ];

    public function shouldDiscoverEvents()
    {
        return true;
    }
}
