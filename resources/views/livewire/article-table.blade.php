<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">subtitle</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->price}}</td>
                <td><a  class="btn btn-warning" href="{{route('article_edit',compact('article'))}}">Modifica</a></td>
                <td><a  class="btn btn-danger" wire:click='delete({{$article}})'>Elimina</a></td>
            </tr>
            @endforeach
          
        
        </tbody>
      </table>

</div>
