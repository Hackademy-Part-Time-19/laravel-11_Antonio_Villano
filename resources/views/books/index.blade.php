<x-layout>

    <h1>Elenco dei libri disponibili</h1>
    @foreach ($books as $book)
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($book->image) ?? '...'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <h6 class="card-title">{{$book->author}}</h6>
          <p class="card-text">{{$book->year}}</p>
          <p class="card-text">{{$book->genre}}</p>
          <h6 class="card-text">{{$book->price}}</h6>
          <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
          <a href="{{route('books.index')}}" class="btn btn-primary">Books</a>
        </div>
      </div>

    @endforeach
</x-layout>