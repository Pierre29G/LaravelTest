<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index() {
        return "<h1>Premier test</h1>";
    }

    public function about() {
        return "<h1>La page à propos</h1>";
    }

    public function article($id) {
        return "<h1>l'article avec l'id = $id</h1>";
    }
}