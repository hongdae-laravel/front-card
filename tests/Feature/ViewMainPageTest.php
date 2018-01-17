<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMainPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * ViewMainPageTest
     *
     * @return void
     */
    public function test_main_page_shows_heading_text()
    {
        $response = $this->get('/');
        $response->assertSee('<h1>Front Card</h1>');
    }

    public function test_home_page_does_redirect_login_page_if_user_isnt_login()
    {
        $response = $this->get('/home');
        $response->assertRedirect('/login');
    }

    /**
     *
     */
    public function test_home_page_shows_welcome_message_with_user_name()
    {
        $response = $this->get('/home');
//        $this->artisan('db:seed', ['--class' => 'DatabaseTestSeeder']);
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/home')
            ->assertSee($user->name.'님 환영합니다.');
    }
}
