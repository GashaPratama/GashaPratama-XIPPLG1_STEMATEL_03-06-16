<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $achievements = Achievement::all();
        $teams = Team::all();
        $galleries = Gallery::all();

        return view('pages.home', compact('teachers', 'achievements', 'teams', 'galleries'));
    }
}
