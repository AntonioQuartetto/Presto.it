<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class EditAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    // public $image;
    public $category;
    public $originalCategory;
    public $photo;

    public Announcement $announcement;

    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=> 'required|integer|digits_between:1,20',
        'category' => 'required'
        // 'image' => 'mimes:bmp,png,jpeg, jpg',
    ];

    protected $messages=[
        'title.required'=>'Nome annuncio obbligatorio',
        'title.min'=>'Caratteri insufficienti',
        'body.required' => 'Descrizione obbligatoria',
        'body.min' => 'Caratteri insufficienti',
        'price.required' => 'Prezzo obbligatorio',
        'price.float' => 'Solo numeri consentiti',
        'category.required' => 'Categoria obbligatoria' 
    ];


   
    public function updated($propertyName){
        
        $this->validateOnly($propertyName);
    }
    

    public function mount(){
        $this->title = $this->announcement->title;
        $this->body = $this->announcement->body;
        $this->price = $this->announcement->price;
        $this->originalCategory = $this->announcement->category;
        $this->category = $this->announcement->category_id;

    }

    
    
    public function update()
    {
        $this->validate();
        $this->announcement->update([ 
            'title' => $this->title,
            'body' =>  $this->body,
            'price' => $this->price,
            'category_id' => $this->category
            
        ]);
        $this->announcement->save();
        $this->announcement->setAccepted(null);

        
        return redirect()->route('profile.index')->with('success', 'Modifica avvenuta con successo, sarà ripubblicato dopo un ulteriore revisione da parte del team di Presto.it!');
    }
   
    public function render()
    {
        return view('livewire.edit-announcement');
    }
}
