<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books= Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated=$request->validated();

        $book = Book::create(['title'=>$validated['title'],'description'=>$validated['description'],'price'=>$validated['price'],'genre'=>$validated['genre'],'year'=>$validated['year'],'author'=>auth()->user()->name]);
        if($request->hasFile('image')){
            $path = 'public/images';
            $name= $book['id'].$request->file('image')->getClientOriginalName();
            $file = $request->file('image')->storeAs($path,$name);
            $image =$path.'/'.$name;
            $book->image=$image;

        }
        $book->save();
        return redirect()->back()->with(['success'=>'libro inserito correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated=$request->validated();
        $book->update(['title'=>$validated['title'],'description'=>$validated['description'],'price'=>$validated['price'],'genre'=>$validated['genre'],'year'=>$validated['year']]);
        return redirect()->back()->with(['success'=>'libro aggiornato correttamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
