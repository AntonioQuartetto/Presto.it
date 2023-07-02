<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\StorePageControllerRequest;
use App\Http\Requests\UpdatePageControllerRequest;



class PageController extends Controller
{
   
    public function index()
    {
  
    return view('page.homepage');

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function categoryShow(Category $category)
    {
        
        return view('page.categoryShow', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PageController $pageController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageControllerRequest $request, PageController $pageController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageController $pageController)
    {
        //
    }
    public function searchAnnouncaments(Request $request){
        

    $announcements= Announcement::search($request->searched)->paginate(10);
     
      
         return view('announcement.search', compact('announcements'));
    }
}
