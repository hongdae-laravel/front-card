<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMainPageTest extends TestCase
{
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

    public function test_home_page_shows_welcome_message_with_user_name()
    {
        $response = $this->get('/home');
    }
}
