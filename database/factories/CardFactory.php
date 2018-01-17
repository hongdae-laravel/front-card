<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'created_at' => Carbon::now()->format('Y-m-d H:i:j'),
    ];
});
