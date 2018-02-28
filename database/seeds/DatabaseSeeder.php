<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Jane Appleseed',
            'email' => 'jane@test.com',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('cards')->insert([
            'name' => 'Kraken',
        ]);

        DB::table('cards')->insert([
            'name' => 'Dragon',
        ]);

        DB::table('card_slots')->insert([
           'user_id' => 1,
           'card_id' => 1,
        ]);

        DB::table('card_slots')->insert([
            'user_id' => 1,
            'card_id' => 2,
        ]);
    }
}
