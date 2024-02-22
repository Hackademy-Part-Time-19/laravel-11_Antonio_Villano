<x-layout>
    
    <h1>Login</h1>
    <x-success></x-success>
    @if (session()->has('error'))
    <h2 class="alert alert-danger">{{session('error')}}</h2>
    @endif
     <form action="/login" method="POST">
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
             <input name="password" type="tpassword" class="form-control" id="password">

         </div>

         <button type="submit" class="btn btn-primary">Login</button>
     </form>
</x-layout>