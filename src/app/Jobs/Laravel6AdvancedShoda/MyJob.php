<?php

namespace App\Jobs\Laravel6AdvancedShoda;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Laravel6AdvancedShoda\Person;
use Illuminate\Support\Facades\Storage;

class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $person;

    public function getPersonId()
    {
        return $this->person->id;
    }

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public function __construct(Person $person)
    public function __construct($id)
    {
        $this->person = Person::find($id)->first();
    }

    public function __invoke()
    {
        $this->handle();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->doJpb();
    }

    public function doJob()
    {
        $suffix = ' [+MYJOB]';
        if (strpos($this->person->name, $suffix))
        {
            $this->person->name = str_replace($suffix, '', $this->person->name);
        } else {
            $this->person->name .= $suffix;
        }
        $this->person->save();
        Storage::append('person_access_log.txt', $this->person->all_data);
    }
}
