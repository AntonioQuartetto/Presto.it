<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title','body','price','image', 'category_id'];

    public function toSearchableArray()
    {
        $category=$this->category;
        $array=[
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            // 'price'=> (float) $this->price,
            'category' => $category,
        ];
        return $array;
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }
    
}
