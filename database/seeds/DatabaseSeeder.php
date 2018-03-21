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
            'name' => 'Cerberos',
        ]);

        DB::table('cards')->insert([
            'name' => 'Sphinx',
        ]);

        DB::table('cards')->insert([
            'name' => 'Griffin',
        ]);

        DB::table('cards')->insert([
            'name' => 'Minotauros',
        ]);

        DB::table('cards')->insert([
            'name' => 'Cyclops',
        ]);

        DB::table('cards')->insert([
            'name' => 'Siren',
        ]);

        DB::table('cards')->insert([
            'name' => 'Basilisk',
        ]);

        DB::table('cards')->insert([
            'name' => 'Myrmekes',
        ]);

        DB::table('cards')->insert([
            'name' => 'Peryton',
        ]);

        DB::table('cards')->insert([
            'name' => 'Satyrs',
        ]);

        DB::table('cards')->insert([
            'name' => 'Chimera',
        ]);

        DB::table('card_user')->insert([
           'user_id' => 1,
           'card_id' => 1,
        ]);

        DB::table('card_user')->insert([
            'user_id' => 1,
            'card_id' => 2,
        ]);

        DB::table('card_user')->insert([
            'user_id' => 1,
            'card_id' => 3,
        ]);

        DB::table('card_user')->insert([
            'user_id' => 1,
            'card_id' => 4,
        ]);

        DB::table('card_user')->insert([
            'user_id' => 1,
            'card_id' => 5,
        ]);
    }
}
