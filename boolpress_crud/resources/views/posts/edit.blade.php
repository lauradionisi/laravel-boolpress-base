@extends('layouts.app')

@section('title', 'Modifica post')
    
@section('content')

 
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">EDIT Name:</label>
            <input type="text" class="form-control" name="name" id="name" value = "{{ $post -> name }} ">
        </div>
        <div class="form-group">
            <label for="topic">topic:</label>
            <input type="text" class="form-control" name="topic" id="topic" value = "{{ $post -> topic }} ">
        </div>
        <div class="form-group">
            <label for="author">author:</label>
            <input type="text" class="form-control" name="author" id="author" value = "{{ $post -> author }} ">
        </div>
        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" class="form-control" name="description" id="description" value = "{{ $post -> description }} ">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
  
@endsection
    
