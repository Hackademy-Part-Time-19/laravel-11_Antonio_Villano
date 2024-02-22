<x-layout>
   
    <h1>Register</h1>
    <x-success></x-success>
    @if (session()->has('error'))
    <h2 class="alert alert-danger">{{session('error')}}</h2>
    @endif
     <form action="/register" method="POST">
         @csrf
         <div class="mb-3">
             <label for="name" class="form-label">Nome</label>
             <input name="name" type="name" class="form-control" id="name" >
         </div>
         @error('name')<span class='text-danger'>{{$message}}</span>
         @enderror
         <div class="mb-3">
             <label for="email" class="form-label">Email</label>
             <input name="email" type="email" class="form-control" id="email" >

         </div>
         @error('email')<span class='text-danger'>{{$message}}</span>
         @enderror
         <div class="mb-3 form-check">
             <label class="form-check-label" for="password">Password</label>
             <input name="password" type="password" class="form-control" id="password">

         </div>
         @error('password')<span class='text-danger'>{{$message}}</span>
         @enderror
         <div class="mb-3 form-check">
            <label class="form-check-label" for="password_confirmation">Password confirmation</label>
            <input name="password_confirmation" type="password_confirmation" class="form-control" id="password_confirmation">
        </div>

         <button type="submit" class="btn btn-primary">Register</button>
     </form>
</x-layout>