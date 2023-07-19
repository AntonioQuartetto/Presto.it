<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Faker\Core\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAnnouncement extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $oldimages=[];
    public $category;
    public $originalCategory;
    public $photo;
    public $images = [];
    public $temporary_images;

    public Announcement $announcement;

    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'required|image|max:1024'
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
        $this->oldimages = $this->announcement->images;
    }

    public function updatedTemporaryImages(){  
        if($this->validate([ 'temporary_images.*' => 'image|max:1024'])){
                foreach($this->temporary_images as $image){
                    $this->images[] = $image;            
            }  
        }         
    }
    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
    public function update()
    {
        $this->validate();
        $this->announcement->update([ 
            'title' => $this->title,
            'body' =>  $this->body,
            'price' => $this->price,
            'category_id' => $this->category,
              
        ]);
        if(count($this->images)){
            foreach($this->images as $image){
                //$this->announcement->images()->create([
                  //  'path' => $image->store('images', 'public') //controllare percorso
                //]);
                $newFileName="announcements/{$this->announcement->id}";
                $newImage=$this->announcement->images()->create([
                    'path' => $image->store($newFileName, 'public') 
                ]);
                RemoveFaces::withChain([ 

                    new ResizeImage($newImage->path,400,300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);        
            }
        }
        $this->announcement->save();
        $this->announcement->setAccepted(null);
    return redirect()->route('profile.index')->with('success', 'Modifica avvenuta con successo, sarà ripubblicato dopo un ulteriore revisione da parte del team di Presto.it!');
    }

    public function removeOldImage($key){
            $this->oldimages[$key]->delete();
            unset($this->oldimages[$key]);
    }
   
    public function render()
    {
        return view('livewire.edit-announcement');
    }
}
