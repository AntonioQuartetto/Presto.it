<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;
    
    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
        'category'=>'required',
    ];
    
    protected $messages=[
        'title.required'=>'Nome annuncio obbligatorio',
        'title.min'=>'Caratteri insufficienti',
        'body.required' => 'Descrizione obbligatoria',
        'body.min' => 'Caratteri insufficienti',
        'price.required' => 'Prezzo obbligatorio',
        'price.numeric' => 'Solo numeri consentiti',
        'category.required' => 'Categoria obbligatoria' 
    ];
    
    public function store() {
        $this->validate();
        $category=Category::find($this->category); 
        $announcement=$category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]); 
        Auth::user()->announcements()->save($announcement);     
        session()->flash('message','Annuncio inserito con successo!');
        $this->clear();
    }
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    
    public function clear(){
        $this->title='';
        $this->body='';
        $this->price='';
        $this->category='';
    }
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
