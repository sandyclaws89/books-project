@extends('template.base')
@section('pageTitle', $pageTitle)
@section('pageMain')
<section class="d-flex justify-content-center my-5">
    <div class="card  " style="width: 30rem;">
        <img src="{{ $book->cover_image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <p class="card-text">{{$book->synopsis}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Author : {{$book->author}}</li>
          <li class="list-group-item">Pubblication Date : {{$book->pubblication_date}}</li>
          <li class="list-group-item">Genre : {{$book->genre}}</li>
          <li class="list-group-item">Review : {{$book->review}}</li>
          <li class="list-group-item">Available : {{$book->available}}</li>
          <li class="list-group-item">Price : {{$book->price}}</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body d-flex justify-content-between">
            <button type="button" class="btn btn-primary">Favorities</button>
            <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </section>
    @endsection


