<?php
namespace App\Listeners\Laravel6AdvancedShoda;

class MyEventSubscriber
{
    public function subscribe($event)
    {
        $event->listen(
            'App\Events\Laravel6AdvancedShoda\PersonEvent',
            'App\Listeners\Laravel6AdvancedShoda\PersonEventListener@handle',
        );
    }
}
