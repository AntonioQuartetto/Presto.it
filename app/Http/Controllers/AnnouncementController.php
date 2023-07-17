<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{

    
    
public function __construct(){

        $this->middleware('auth')->except('index','show');
    }


    public function index(){

             //$announcements= Announcement::take(6)->get()->sortByDesc('created_at');
     $announcements= Announcement::orderBy('created_at', 'desc')->paginate(8);
     //$pagination = Announcement::paginate(6);
    return view('announcement.index', compact('announcements'));
    }

    public function create(Announcement $request)
    {
        
        // $path_image='';
        // if ($request->hasFile('image') && $request->file('image')->isValid()){
        //     $path_name = $request->file('image')->getClientOriginalName();
        //     //$path_extension = $request->file('image')->getClientOriginalExtension();
        //     $path_image = $request->file('image')->storeAs('public/images' , $path_name);
        // }

        // Announcement::create([
        //     'title'=>$request->title,
        //     'author'=>$request->author,
        //     'year'=>$request->year,
        //     'pages'=>$request->pages,
        //     'image'=>$path_image
        // ]);

        // return redirect()->route('page.homepage');

        return view('announcement.create');
    }

    public function show(Announcement $announcement){
        
        return view('announcement.show',compact('announcement'));

    }

    public function edit(Announcement $announcement)
    {

        if(!(Auth::user()->id == $announcement->user_id)){
            abort(401);
        };

        // $announcement->detach();
        // $announcement->attach($announcement);
        
        return view('announcement.edit', compact('announcement'));
    }
    public function destroy(Announcement $announcement) {
            $images = Image::all();
            foreach($images as $image){

                if($announcement->id == $image->announcement_id){
                   
                    $image->delete();
                }         
            }
       
        $announcement->delete();
        return redirect()->route('profile.index')->with('success', 'Cancellazione avvenuta con successo!');

    }


}
