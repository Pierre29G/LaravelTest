<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
public function run() {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => "utilisateur1",
            'email' => "utilisateur1@gmail.com",
            'password' => bcrypt("azerty")
        ]);

        DB::table('users')->insert([
            'name' => "utilisateur2",
            'email' => "utilisateur2@gmail.com",
            'password' => bcrypt("azerty")
        ]);

        for ($i = 1; $i <= 6; $i++) {
            DB::table('photos')->insert([
                'title' => Str::random(10),
                'url' => "/images/$i.jpg",
                'note' => $i * 2,
                "user_id" => $i % 2 + 1
            ]);
        }
    }
}