<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Laravel6AdvancedShoda\Person;
use App\Jobs\Laravel6AdvancedShoda\MyJob;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        // $schedule->exec('./mycmd.sh');
        // $schedule->command('queue:work --stop-when-empty');
        $count = Person::all()->count();
        $id = rand(0, $count) + 1;
        $schedule->call(function () use ($id) {
            $person = Person::find($id);
            MyJob::dispatch($person);
        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
