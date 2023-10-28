<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditForm extends Component
{

    public $articleId;
    public $title;
    public $subtitle;
    public $description;
    public $price;

    public function mount(){

      $article = Article::find($this->articleId);

      $this->title = $article->title;
      $this->subtitle = $article->subtitle;
      $this->description = $article->description;
      $this->price = $article->price;

    }
    public function edit(){
        $article = Article::find($this->articleId);

        $article->update([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);

        return redirect(route('welcome'))->with('message', 'Articolo modificato correttamente');

    }


    public function render()
    {
        return view('livewire.edit-form');
    }
}
