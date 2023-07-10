<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    public $announcement;
    

    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
        'category'=>'required',
        'images.*' => 'image|max:1024',
        // 'temporary_images' => 'required|image|max:1024'
    ];
    
    protected $messages=[
        'title.required'=>'Nome annuncio obbligatorio',
        'title.min'=>'Caratteri insufficienti',
        'body.required' => 'Descrizione obbligatoria',
        'body.min' => 'Caratteri insufficienti',
        'price.required' => 'Prezzo obbligatorio',
        'price.numeric' => 'Solo numeri consentiti',
        'category.required' => 'Categoria obbligatoria',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo 1mb',
        'images.image' => 'I file devono essere immagini',
        'images.max' => 'L\'immagine dev\'essere massimo 1mb'
    ];
   

    public function updatedTemporaryImages(){
       
        if($this->validate([
            
            'temporary_images.*' => 'image|max:1024',
            
            ])){
                {
                    foreach($this->temporary_images as $image){

                        $this->images[] = $image;
            }
           
        }
        
    }}

    public function removeImage($key){

        if(in_array($key, array_keys($this->images))){

            unset($this->images[$key]);
        }

    }


    public function store() {

        $this->validate();

        $category=Category::find($this->category); 
        // $this->announcement->user()->associate(Auth::user());
        // $this->announcement->save();
        $announcement=$category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]); 

        if(count($this->images)){
            foreach($this->images as $image){
                $this->announcement->images()->create([
                    'path' => $image->store('images', 'public') //controllare percorso
                ]);
            }
            
        }
       
        // $this->announcement->user()->associate(Auth::user());
        // $this->announcement->save();
     
        Auth::user()->announcements()->save($announcement);     
        session()->flash('message','Annuncio inserito con successo, sarà pubblicato dopo la revisione!');
        $this->cleanForm();

        
       
    }

    public function cleanForm(){
        $this->title='';
        $this->body='';
        $this->price='';
        $this->category='';
        $this->images = [];
        $this->temporary_images = [];

    }
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
        
    }
    
   
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
