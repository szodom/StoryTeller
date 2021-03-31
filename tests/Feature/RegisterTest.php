<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{

    use RefreshDatabase;

    
    public function test_user_can_view_a_register_form()
    {
        $response = $this->get('/register');

        $response->assertSuccessful();

        $response->assertViewIs('auth.register');
    }
    
    
    public function test_user_redirect_to_homepage_after_login()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/home');

    }
}
