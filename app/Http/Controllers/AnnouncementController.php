<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    
    
public function __construct(){

        $this->middleware('auth')->except('homepage');
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
  

}
