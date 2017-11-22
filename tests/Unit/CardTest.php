<?php

namespace Tests\Unit;

use App\Card;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CardTest extends TestCase
{
    /**
     * Card test
     *
     * @return void
     */
    public function test_card_has_a_name()
    {
        $card = new Card();
        $card->name = 'testName';
        $this->assertNotEmpty( $card->getName() );
    }
}
