<?php
namespace Tests\Unit;

use App\Type;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TypeTest extends TestCase
{
    /**
     * Type test
     *
     * @return void
     */
    protected $type;
    protected $testArr = [
        'id' => 1,
        'name' => '초원괴물',
    ];

    protected function setUp()
    {
        $this->type = new Type($this->testArr);
    }

    public function test_type_has_an_id()
    {
        $this->assertEquals( $this->type->getId(), $this->testArr['id'] );
    }

    public function test_type_has_a_name()
    {
        $this->assertEquals( $this->type->getName(), $this->testArr['name'] );
    }
}