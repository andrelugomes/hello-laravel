<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamsTest extends TestCase
{
    use RefreshDatabase; //clear DB before each test


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_another_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function clear_test_by_annotations()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_a_team()
    {
        $this->withExceptionHandling(); //helper to show exceptions

        //Given
        //Laravel helper
        $this->actingAs(factory('App\User')->create());

        //When
        //Laravel helper
        $this->post('/teams', [
            'name' => 'Test Team'
        ]);


        //Then
        //Laravel helper
        $this->assertDatabaseHas('teams', ['name' => 'Test Team']);

    }


}
