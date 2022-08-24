<?php

namespace App\Jobs\Laravel6AdvancedShoda;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Laravel6AdvancedShoda\Person;

class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $person;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $suffix = ' [+MYJOB]';
        if (strpos($this->person->name, $suffix))
        {
            $this->person->name = str_replace($suffix, '', $this->person->name);
        } else {
            $this->person->name .= $suffix;
        }
        $this->person->save();
    }
}
