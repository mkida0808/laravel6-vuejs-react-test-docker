<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Laravel6AdvancedShoda\Person;
use DatabaseSeeder;

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
        for ($i = 0; $i < 100; $i++) {
            factory(Person::class)->create();
        }
        $count = Person::get()->count();
        $person = Person::find(rand(1, $count));
        $data = $person->toArray();
        print_r($data);

        $this->assertDatabaseHas('people', $data);

        $person->delete();
        $this->assertDatabaseMissing('people', $data);

        // $this->seed(DatabaseSeeder::class);
        // $person = Person::find(1);
        // $data = $person->toArray();

        // $this->assertDatabaseHas('people', $data);

        // $person->delete();
        // $this->assertDatabaseMissing('people', $data);

        // $person->delete();
        // $this->assertDatabaseMissing('people', $data);

        // $data = [
        //     'id' => 21,
        //     'name' => 'DUMMY',
        //     'mail' => 'dummy@mail',
        //     'age' => 0,
        // ];
        // $person = new Person();
        // $person->fill($data)->save();
        // $this->assertDatabaseHas('people', $data);

        // $person->name = 'NOT-DUMMY';
        // $person->save();
        // $this->assertDatabaseMissing('people', $data);
        // $data['name'] = 'NOT-DUMMY';
        // $this->assertDatabaseHas('people', $data);

        // $person->delete();
        // $this->assertDatabaseMissing('people', $data);

        // $data = [
        //     'id' => 1,
        //     'person_id' => 1,
        //     'title' => 'タイトル1',
        //     'message' => 'メッセージ1',
        // ];
        // $this->assertDatabaseHas('boards', $data);
        // $data['id'] = 2;
        // $this->assertDatabaseMissing('boards', $data);

        // $this->get('/laravel6advancedshoda')->assertStatus(404);
        // $this->get('/laravel6advancedshoda/hoge')->assertStatus(404);
        // $this->get('/laravel6advancedshoda/hello')->assertSeeText('Index');

        // $response = $this->get('/');
        // $response->assertStatus(200);
        // $this->get('/laravel6advancedshoda/hello')->assertOk();
        // $this->post('/laravel6advancedshoda/hello')->assertOk();
        // $this->get('/laravel6advancedshoda/hello/1')->assertOk();
        // $this->get('/laravel6advancedshoda/hello')->assertSee('<h1>'); // メモリエラー
        // $this->get('/laravel6advancedshoda/hello')->assertSeeInOrder(['<html', '<head', '<body', '<h1>']); // メモリエラー

    }
}
