<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center ">Crea il tuo articolo </h1>
            </div>
            @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <div class="col-12 md-6">
                <form wire:submit.prevent='store'>
                    <div class="form-group">
                      <label for="title">Titolo articolo </label>
                      <input  wire:model.live='title' type="text" class="form-control" id="title">
                     
                    </div>
                    <div class="form-group">
                      <label for="subtitle">sottotitolo articolo </label>
                      <input wire:model.live='subtitle' type="text" class="form-control" id="subtitle">
                     
                    </div>
                    <div class="form-group">
                      <label for="description">Descrizione</label>
                      <input wire:model.live='description' type="text" class="form-control" id="description" >
                    </div>
                    <div class="form-group">
                      <label for="price">Prezzo</label>
                      <input wire:model.live='price' type="text" class="form-control" id="price" >
                    </div>
                   
                    <button  type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>
