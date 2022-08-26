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
        // $response = $this->get('/');
        // $response->assertStatus(200);
        $this->get('/laravel6advancedshoda')->assertStatus(404);
        // $this->get('/laravel6advancedshoda/hello')->assertOk();
        // $this->post('/laravel6advancedshoda/hello')->assertOk();
        // $this->get('/laravel6advancedshoda/hello/1')->assertOk();
        $this->get('/laravel6advancedshoda/hoge')->assertStatus(404);
        $this->get('/laravel6advancedshoda/hello')->assertSeeText('Index');
        // $this->get('/laravel6advancedshoda/hello')->assertSee('<h1>'); // メモリエラー
        // $this->get('/laravel6advancedshoda/hello')->assertSeeInOrder(['<html', '<head', '<body', '<h1>']); // メモリエラー
        
    }
}
