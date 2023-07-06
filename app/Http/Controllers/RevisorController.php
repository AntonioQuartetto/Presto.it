<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RevisorController extends Controller
{
  
  public function __construct(){
    
    $this->middleware('auth');
  }
  public function index() {
    $announcement_to_check=Announcement::where('is_accepted',null)->first();
    return view('revisor.index',compact('announcement_to_check'));
  }
  
  public function acceptAnnouncements(Announcement $announcement) {
    $announcement->setAccepted(true);
    Session::put('modifyAnnouncement', $announcement);
    Session::save();
    return redirect()->back()->with('message', 'Annuncio approvato');
  }
  
  public function rejectAnnouncements(Announcement $announcement) {
    $announcement->setAccepted(false);
    Session::put('modifyAnnouncement', $announcement);
    Session::save();
    return redirect()->back()->with('message', 'Annuncio rifiutato');
  }
  
  public function rewindAnnouncements() {
    $announcement = Session::get('modifyAnnouncement');  
    $announcement->setAccepted(null);
    Session::remove('modifyAnnouncement');
    Session::save();
    
    return redirect()->back()->with('message', 'Annuncio annullato!');
  }
  
  public function create(){
    return view('revisor.create');
  }
  
  public function becomeRevisor(){
    Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
    return redirect()->back()->with('message','Richiesta inviata');
  }
  
  public function makerevisor(User $user){
    Artisan::call('app:make-user-revisor', ["email"=>$user->email]);
    return redirect('/')->with('message','Complimenti! L\'utente è diventato revisore');
  }
  
  
  
  
  
}
