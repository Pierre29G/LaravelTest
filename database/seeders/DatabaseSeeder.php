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
            'password' => bcrypt("azerty"),
            'imgUrl' => "/userImg/1.jpg"
        ]);

        DB::table('users')->insert([
            'name' => "utilisateur2",
            'email' => "utilisateur2@gmail.com",
            'password' => bcrypt("azerty"),
            'imgUrl' => "/userImg/2.jpg"
        ]);
    
        DB::table('users')->insert([
            'name' => "Pierre",
            'email' => "pierre29g@gmail.com",
            'password' => bcrypt("pierre"),
            'imgUrl' => "/userImg/3.jpg"
        ]);
    
        DB::table('artists')->insert([
            'name' => "Pinocchiop",
            'imgUrl' => "/artistImg/1.jpg"
        ]);
    
        DB::table('artists')->insert([
            'name' => "Billie Eilish",
            'imgUrl' => "/artistImg/2.jpg"
        ]);
    
        DB::table('songs')->insert([
            'name' => "Common World Domination",
            'genre' => "Jpop",
            'artist_id' => "1",
            'url' => "/music/1.mp3",
            'imgUrl' => "/songImg/domination.jpg"
        ]);
    
        DB::table('songs')->insert([
            'name' => "Nina",
            'genre' => "Jpop",
            'artist_id' => "1",
            'url' => "/music/2.mp3",
            'imgUrl' => "/songImg/nina.jpg"
        ]);
    
        DB::table('songs')->insert([
            'name' => "When the party's over",
            'genre' => "Pop",
            'artist_id' => "2",
            'url' => "/music/3.mp3",
            'imgUrl' => "/songImg/party.jpg"
        ]);
    
        DB::table('songs')->insert([
            'name' => "Bad Guy",
            'genre' => "Pop",
            'artist_id' => "2",
            'url' => "/music/4.mp3",
            'imgUrl' => "/songImg/bad.jpg"
        ]);
    
        DB::table('songs')->insert([
            'name' => "Therefore I am",
            'genre' => "Pop",
            'artist_id' => "2",
            'url' => "/music/5.mp3",
            'imgUrl' => "/songImg/therefore.jpg"
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