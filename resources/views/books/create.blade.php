<x-layout>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mx-auto">
        <form class="mt-5" action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="title">
          </div>
          @error('title')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input name="price" type="number" class="form-control" id="price" aria-describedby="price">
          </div>
          @error('price')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="year" class="form-label">year</label>
            <input name="year" type="number" class="form-control" id="year" aria-describedby="year">
          </div>
          @error('year')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="genre" class="form-label">genre</label>
            <input name="genre" type="text" class="form-control" id="genre" aria-describedby="genre">
          </div>
          @error('genre')<span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input name="description" type="text-area" class="form-control" id="description" aria-describedby="description">
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