@extends('template.base')
@section('pageTitle', 'Book Listing')
@section('pageMain')
<div class="container my-5 ">
    <div class="row g-4 justify-content-center">

        @foreach ($books as $book)
            <div class="card text-center " style="width: 18rem;">
                <img src="{{$book->cover_image}}" class="card-img-top" alt="{{$book->title}}">
                <div class="card-body d-flex flex-column justify-content-between align-items-center">
                  <h5 class="card-title">{{$book->title}}</h5>
                  <p class="card-text ">{{$book->short_description}}</p>
                  <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary align-self-center">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<nav class="my-1">
    <div class="pagination pagination-lg justify-content-center">
        {{$books->links()}}
    </div>
</nav>
@endsection
