<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $data = [
            'id' => 1,
            'person_id' => 1,
            'title' => 'タイトル1',
            'message' => 'メッセージ1',
            'age' => 34,
        ];
        $this->assertDatabaseHas('board', $data);
        // $data['id'] = 2;
        // $this->assertDatabaseMissing('board', $data);

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
