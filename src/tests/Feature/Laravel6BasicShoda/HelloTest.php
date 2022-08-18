<?php

namespace Tests\Feature\Laravel6BasicShoda;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
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
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $message = "Hello";
        $this->assertEquals('Hello', $message);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }
}
