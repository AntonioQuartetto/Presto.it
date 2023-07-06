<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePageControllerRequest;
use App\Http\Requests\UpdatePageControllerRequest;

class PageController extends Controller
{
   

    public function index()
    {
        $announcements= Announcement::orderBy('created_at', 'desc')->paginate(6);

    return view('page.homepage', compact('announcements'));

        
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
    // $announcements="";
        
    $prezzoMinimo = $request->priceMin ? $request->priceMin : 0; // Imposta il prezzo minimo desiderato
    $prezzoMassimo = $request->priceMax ? $request->priceMax : PHP_INT_MAX; // Imposta il prezzo massimo desiderato
// dd($prezzoMinimo);
// if (!empty ($request->search)){
$announcements= Announcement::search($request->searched)->paginate(10);
$listaannunci = collect([]);
foreach ($announcements->getCollection() as $annuncio) {
if ($annuncio->price<=$prezzoMassimo && $annuncio->price>=$prezzoMinimo) {
$listaannunci->add($annuncio);
}};
$announcements->setCollection($listaannunci);

    //     }
    // else{
    //     $announcements= Announcement::where($request->searched)
    //     ->where('prezzo', '>=', $prezzoMinimo)
    //     ->where('prezzo', '<=', $prezzoMassimo);
    // }

         return view('announcement.search', compact('announcements'));
    }
};
