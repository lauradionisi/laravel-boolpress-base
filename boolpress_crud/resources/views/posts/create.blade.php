@extends('layouts.app')

@section('title', 'Nuovo Post')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
         </div>
    @endif

    <h1>Nuovo articolo</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="topic">Topic</label>
            <input type="text" class="form-control" id="topic">
          </div>
        <div class="form-group">
          <label for="text">Author</label>
          <input type="text" class="form-control" id="author">
        </div>
        <div class="form-group">
            <label for="description">Testo</label>
            <textarea class="form-control" id="description" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
   
@endsection
    
