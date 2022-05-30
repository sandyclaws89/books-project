@extends('template.base')
@section('pageTitle', 'New Post')
@section('pageMain')
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        @if (session('status'))
            <div class="alert alert-succes">{{ session('status') }}</div>
        @endif
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class ="form-control" id="title" name="title">
                </div>
                <div class="col-md-6">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class ="form-control" id="author" name="author">
                </div>
                <div class="col-md-4">
                    <label for="cover_image" class="form-label">Cover Image</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image">
                </div>
                <div class="col-md-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" min="3.0" step="0.1" class="form-control" id="price" name="price">
                </div>
                <div class="col-md-4">
                    <label for="genre" class="form-label">Genre</label>
                    <select id="genre" class="form-select" name="genre">
                        <option selected>Choose...</option>
                        <option value="Horror">Horror</option>
                        <option value="Dramatic">Dramatic</option>
                        <option value="Romantic">Romantic</option>
                        <option value="Essay">Essay</option>
                        <option value="Adult">Adult</option>
                        <option value="Historical">Historical</option>
                  </select>
                </div>
                <div class="col-6">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea class="form-control" id="short_description" rows="5" name="short_description"></textarea>
                </div>
                <div class="col-6">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    <textarea class="form-control" id="synopsis" rows="5" name="synopsis"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="review" class="form-label">Review</label>
                    <input type="number" min="0.0" step="0.1" class="form-control" id="review" name="review">
                </div>
                <div class="col-md-4">
                    <label for="pubblication_date" class="form-label">Pubblication Date</label>
                    <input type="date" class="form-control" id="pubblication_date" name="pubblication_date">
                </div>
                <div class="col-md-4">
                    <label for="checkin_date" class="form-label">Checkin Date</label>
                    <input type="date" class="form-control" id="checkin_date" name="checkin_date">
                </div>
                <div class="col-md-4">
                    <label for="publishing_house" class="form-label">Publishing House</label>
                    <input type="text" class="form-control" id="publishing_house" name="publishing_house">
                </div>
                <div class="col-md-4">
                    <label for="edition" class="form-label">Edition</label>
                    <input type="text" class="form-control" id="edition" name="edition">
                </div>
                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" min="1" step="any" class="form-control" id="quantity" name="quantity">
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="available" name="available" checked value="1">
                    <label class="form-check-label" for="available">
                      Available
                    </label>
                  </div>
                </div>
                  <button type="submit" class="btn btn-primary">Create</button>
            </form>
@endsection
