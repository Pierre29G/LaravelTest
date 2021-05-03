<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Song;
use App\Models\Artist;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
     public function index() {
        $song = \App\Models\Song::all(); // SELECT * from song // SELECT * from song
        $artist = \App\Models\Artist::all();// SELECT * from artist // SELECT * from artist

        return view("firstcontroller.index", ["song" => $song], ["artist" => $artist]);
    }

    public function about() {
        return view("FirstController.about");
    }

    public function article($id) {
        return "<h1>l'article avec l'id = $id</h1>";
    }
    
    public function create() {
        return view("FirstController.create");
    }
    
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'note' => 'numeric|min:0|max:20',
            'image' => 'file|mimes:jpg,bmp,png'
        ]);

        $p = new Photo();
        $p->title = $request->input("title");

        $name = $request->file("image")->hashName();
        $request->file("image")->move("images/uploads/".Auth::id(), $name);
        $p->url = "/images/uploads/".Auth::id()."/$name";
        $p->note = $request->input("note");
        $p->user_id = Auth::id();
        $p->save(); // INSERT .....
        return redirect("/");
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