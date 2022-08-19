<?php

namespace Tests\Feature\Laravel6BasicShoda;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function testHello()
    {
        // 値のチェック
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $message = "Hello";
        $this->assertEquals('Hello', $message);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);

        // アクセスチェック
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/laravel6basicshoda');
        $response->assertStatus(302);

        $user = factory(App\User::class)->create();
        // var_dump($user);
        $response = $this->actingAs($user)->get('/laravel6basicshoda');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
}
