<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * User test
     *
     * @return void
     */

    protected $user;

    public function test_user_has_a_name()
    {
        $this->user = factory(User::class)->create();
//        dd($this->user);
        // TODO: Write test!!
    }

}