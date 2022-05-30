<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    protected $validationRules = [
        'title'                 =>  'nullable|numeric|min:5|max:250',
        'cover_image'           =>  'image',
        'short_description'     =>  'min:5|max:1000',
        'author'                =>  'min:5|max:1000|nullable',
        'price'                 =>  'numeric|min:3|max:300',
        'synopsis'              =>  'string|nullable',
        'review'                =>  'numeric|min:0|max:5|nullable',
        'edition'               =>  'string|min:5|max:100|nullable',
        'publishing_house'      =>  'string|min:5|max:250|nullable',
        'pubblication_date'     =>  'date|nullable',
        'checkin_date'          =>  'date',
        'available'             =>  'boolean',
        'quantity'              =>  'numeric',
    ]; /*[
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(15);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules);
        $formData = $request->all();

        $book = new Book();
        $Book->fill($formData);
        $Book->save();

        // $newBook = Book::create($formData);
        return redirect()->route('books.show', $book->id)->with('status', 'Complited with succes!');
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
       return view('books.show', [
           'pageTitle'  =>  $book->title,
           'book'       =>  $book,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
