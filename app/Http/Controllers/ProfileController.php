<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        $user = Auth::user();
        $announcements = Announcement::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('profile.profile', compact('user', 'announcements', 'announcement_to_check'));
    }
}
