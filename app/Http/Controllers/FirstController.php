<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FirstController extends Controller
{
     public function index() {
        $photos = \App\Models\Photo::all(); // SELECT * from photos // SELECT * from photos


        return view("firstcontroller.index", ["photos" => $photos]);
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
        $p = new Photo();
        $p->title = $request->input("title");
        $p->url = $request->input("url");
        $p->note = $request->input("note");
        $p->save(); // INSERT .....
        return redirect("/");
    }
    
    public function user($id) {
        $user = User::findOrFail($id);
        return view("firstcontroller.user", ["user" => $user]);
    }
    
        public function changesuivi($id) {
        $user = User::findOrFail($id);
        Auth::user()->IFollowThem()->toggle($id);
        return back();
    }
}