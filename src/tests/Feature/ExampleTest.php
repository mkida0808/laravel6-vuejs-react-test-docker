<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Laravel6AdvancedShoda\Person;
use DatabaseSeeder;
use Illuminate\Support\Facades\Bus;
use App\Jobs\Laravel6AdvancedShoda\MyJob;
use Illuminate\Support\Facades\Event;
use App\Events\Laravel6AdvancedShoda\PersonEvent;

class ExampleTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        factory(Person::class)->create();
        $person = factory(Person::class)->create();

        Event::fake();
        Event::assertNotDispatched(PersonEvent::class);
        event(new PersonEvent($person));
        Event::assertDispatched(PersonEvent::class);
        Event::assertDispatched(PersonEvent::class, function ($event) use ($person) {
            return $event->person === $person;
        });

        // $id = 1;
        // $data = [
        //     'id' => $id,
        //     'name' => 'DUMMY',
        //     'mail' => 'dummy@mail',
        //     'age' => 0,
        // ];
        // $person = new Person();
        // $person->fill($data)->save();
        // $this->assertDatabaseHas('people', $data);

        // Bus::fake();
        // Bus::assertNotDispatched(MyJob::class);
        // MyJob::dispatch($id);
        // Bus::assertDispatched(MyJob::class, function ($job) use ($id) {
        //     $p = Person::find($id)->first();
        //     return $job->getPersonId() == $p->id;
        // });

        // $list = [];
        // for ($i = 0; $i < 10; $i++)
        // {
        //     $p1 = factory(Person::class)->create();
        //     $p2 = factory(Person::class)->states('upper')->create();
        //     $p3 = factory(Person::class)->states('lower')->create();
        //     $p4 = factory(Person::class)->states('upper')->states('lower')->create();
        //     $list = array_merge($list, [$p1->id, $p2->id, $p3->id, $p4->id]);
        // }

        // for ($i = 0; $i < 10; $i++)
        // {
        //     shuffle($list);
        //     $item = array_shift($list);
        //     $person = Person::find($item);
        //     $data = $person->toArray();
        //     print_r($data);

        //     $this->assertDatabaseHas('people', $data);

        //     $person->delete();
        //     $this->assertDatabaseMissing('people', $data);
    }
}
