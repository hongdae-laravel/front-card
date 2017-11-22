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
//        $response = $this->get('/');
//        $response->assertStatus(200);

        $this->visit('/')
            ->assertSee('Front Card');
    }
}
