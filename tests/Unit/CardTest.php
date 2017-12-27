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

    protected $card;
    protected $testArr = [
        'name' => 'Cerberos',
        'attackPower' => 6,
        'defensePower' => 9,
        'typeId' => 1,
    ];

    protected function setup() {
        $this->card = new Card($this->testArr);
    }
    public function test_card_has_a_name()
    {
        $this->assertEquals( $this->card->getName(), $this->testArr['name'] );
    }

    public function test_card_has_a_typeId()
    {
        $this->assertEquals( $this->card->getTypeId(), $this->testArr['typeId'] );
    }

    public function test_card_has_an_attack_power()
    {
        $this->assertEquals( $this->card->getAttackPower(), $this->testArr['attackPower'] );
    }

    public function test_card_has_an_defense_power()
    {
        $this->assertEquals( $this->card->getDefensePower(), $this->testArr['defensePower'] );
    }
}
