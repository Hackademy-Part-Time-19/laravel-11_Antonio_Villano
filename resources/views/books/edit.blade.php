<x-layout>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mx-auto">
        <form class="mt-5" action="{{route('books.update',compact('book'))}}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <h1>aggiorna il libro {{$book->title}}</h1>
          <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="title" value="{{old('title',$book->title)}}">
          </div>
          @error('title')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input name="price" type="number" class="form-control" id="price" aria-describedby="price" value="{{old('price',$book->price)}}">
          </div>
          @error('price')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="year" class="form-label">year</label>
            <input name="year" type="number" class="form-control" id="year" aria-describedby="year" value="{{old('year',$book->year)}}">
          </div>
          @error('year')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="genre" class="form-label">genre</label>
            <input name="genre" type="text" class="form-control" id="genre" aria-describedby="genre" value="{{old('genre',$book->genre)}}">
          </div>
          @error('genre')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input name="description" type="text-area" class="form-control" id="description" aria-describedby="description" value="{{old('description',$book->description)}}">
          </div>
          @error('description')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input name="image" type="file" class="form-control" id="image" aria-describedby="image">
          </div>
          @error('image')<span class='text-danger'>{{$message}}</span>
          @enderror

          <button type="submit" class="btn btn-primary">Salva</button>
        </form>

      </div>
    </div>
  </div>
</x-layout>