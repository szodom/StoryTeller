<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class RegisterTest extends TestCase
{

    use RefreshDatabase;

    
    public function test_user_can_view_a_register_form()
    {
        $response = $this->get('/register');
        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }
    
    
    public function test_user_cannot_view_a_registration_form_when_authenticated()
    {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/register');
        $response->assertRedirect('/home');

    }

    public function test_user_can_successfully_register() {

        $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => $user->password,
            'birthday' => $user->birthday,
        ]);
        $response->assertRedirect('/home');
        

        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'email' => $user->email,
        ]);
        
    }
    
    public function test_user_fails_registration_with_invalid_email() {

        $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => $user->name,
            'email' =>  'email:rfc,dns',
            'password' => $user->password,
            'password_confirmation' => $user->password,
            'birthday' => $user->birthday,
        ]);
        $response->assertSessionHasErrors();
    }

    public function test_user_fails_registration_with_invalid_password_confirmation() {

        $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => 'invalid',
            'birthday' => $user->birthday,
        ]);
        $response->assertSessionHasErrors();
    }

    public function test_user_fails_registration_with_invalid_password() {

        $user = factory(User::class)->make();

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'invalid',
            'password_confirmation' => $user->password,
            'birthday' => $user->birthday,
        ]);
        $response->assertSessionHasErrors();
    }
}
