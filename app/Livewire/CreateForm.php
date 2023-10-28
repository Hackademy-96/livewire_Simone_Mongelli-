<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{
    public $title;
    public $subtitle;
    public $description;
    public $price;

    protected $rules = [

        'title'=>"required|min:5",
        'subtitle'=>"required",
        'description'=>"required",
        'price'=>"required",
    ];
    protected $messages=[
        'title.required'=>"Il titolo è obbligatorio",
        'title.min'=>"Il titolo deve essere almeno di 5 caratteri",
        'subtitle.required'=>"Il sottotitolo è obbligatorio",
        'description.required'=>"La descrizione è obbligatoria ",
        'price.required'=>"Il prezzo è obbligatorio",
    ];

    public function updated($propertyName){

        $this->validateOnly($propertyName);
    }

    public function store(){



        $article = Article::create([
            'title' =>$this->title,
            'subtitle' =>$this->subtitle,
            'description' =>$this->description,
            'price' =>$this->price,
        ]);

        session()->flash('message', 'Articolo caricato con successo ');
        $this->reset();
    }
    public function cleanForm(){
        $this->title='';
       $this->subtitle='';
       $this->description='';
       $this->price='';

    }
   
    public function render()
    {
        return view('livewire.create-form');
    }
}
