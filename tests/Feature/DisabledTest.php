<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDisabled()
    {
        $this->get("disabled", ["name" => "al"])
            ->assertSeeText('Budi')
            ->assertDontSeeText("al")
            ->assertSeeText('Hello {{ $name }}');
    }
}
