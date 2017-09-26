<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $name = 'Moises Poblete';

        $user = factory(User::class)->create(
            [
                'name' => $name,
            ]

        );

        $this->actingAs($user, 'api')
            ->get('api/user')
            ->assertSee($name);

    }
}
