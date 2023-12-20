<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/world")
            ->assertSeeText("Laravel");
    }

    public function testWithoutRoute()
    {
        $this->get('hello.world', ['name' => 'al'])
            ->assertSeeText('al');
    }
}
