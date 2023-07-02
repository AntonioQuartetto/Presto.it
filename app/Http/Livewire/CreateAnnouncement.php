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
    // public $image;
    public $category;
    public $photo;
    
    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|integer|digits_between:1,20',
        'category'=>'required',
        // 'image' => 'mimes:bmp,png,jpeg, jpg',
    ];
    
    protected $messages=[
        'title.required'=>'Nome annuncio obbligatorio',
        'title.min'=>'Caratteri insufficienti',
        'body.required' => 'Descrizione obbligatoria',
        'body.min' => 'Caratteri insufficienti',
        'price.required' => 'Prezzo obbligatorio',
        'price.integer' => 'Solo numeri consentiti',
        'category.required' => 'Categoria obbligatoria' 
    ];
    


    public function store() {
        // dd($request);

        $this->validate(
            
            // ['image' => 'mimes:png,jpg,pdf',]
    );
 
               

        // $path_image='';
        // if ($request->hasFile('image') && $request->file('image')->isValid()){
        //     $path_name = $request->file('image')->getClientOriginalName();
        //     //$path_extension = $request->file('image')->getClientOriginalExtension();
        //     $path_image = $request->file('image')->storeAs('public/images' , $path_name);
        // }
  

        $category=Category::find($this->category); 
        $announcement=$category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            // 'image'=>$photo,
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
        // $this->photo->store('images');
    }
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
