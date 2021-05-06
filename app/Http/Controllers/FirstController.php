<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Song;
use App\Models\Artist;
use App\Models\Playlist;
use App\Models\Content;
use App\Models\Connnexion;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
     public function index() {
        $song = \App\Models\Song::all(); // SELECT * from song // SELECT * from song
        $artist = \App\Models\Artist::all();// SELECT * from artist // SELECT * from artist

        return view("firstcontroller.index", ["song" => $song], ["artist" => $artist]);
    }
    
    public function artist($id) {
        $artist = Artist::findOrFail($id);
        return view("firstcontroller.artist", ["artist" => $artist]);
    }
    
    public function song($id) {
        $song = Song::findOrFail($id);
        return view("firstcontroller.song", ["song" => $song]);
    }
    
    public function playlist() {
        $playlist = \App\Models\Playlist::all();
        return view("firstcontroller.playlist", ["playlist" => $playlist]);
    }
    
    public function amis($id) {
        $user = \App\Models\User::all();
        $connexion = \App\Models\Connexion::all();
        return view("firstcontroller.amis", ["connexion" => $connexion], ["user" => $user]);
    }
    
    public function playlistsingle($id) {
        $content = \App\Models\Content::all();
        $playlist = Playlist::findOrFail($id);
        return view("firstcontroller.playlistsingle", ["playlist" => $playlist], ["content" => $content]);
    }
    
    
    public function user($id) {
        $user = User::findOrFail($id);
        return view("firstcontroller.user", ["user" => $user]);
    }
    
        public function follow($id) {
        $user = User::findOrFail($id);
        Auth::user()->IFollowThem()->toggle($id);
        return back();
    }
}