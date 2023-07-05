<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        return redirect()->back()->with('message', 'Annuncio approvato');
    }

    public function rejectAnnouncements(Announcement $announcement) {
      $announcement->setAccepted(false);
      return redirect()->back()->with('message', 'Annuncio rifiutato');
    }



    public function rewindAnnouncements(Announcement $announcements_id) {
    
        // Recupera l'ultimo record su cui il revisore ha eseguito un'attività
        $ultimoRecord = Announcement::where('announcement_id', $announcements_id)->orderBy('id', 'desc')->first();
                              
        if ($ultimoRecord) {
          
            // Inverti lo stato del record per annullare l'ultima attività
            $ultimoRecord->is_accepted = !$ultimoRecord->is_accepted;
            $ultimoRecord->save();
    
            return "Ultima attività del revisore annullata con successo.";
        }
        dd($ultimoRecord);
        return "Nessuna attività del revisore da annullare.";
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
