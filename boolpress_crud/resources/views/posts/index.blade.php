@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Tutti gli articoli</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">Nuovo post</a>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">topic</th>
            <th scope="col">author</th>
            <th scope="col">description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                  <th scope="row">{{ $post['id'] }}</th>
                  <td>{{ $post['name'] }}</td>
                  <td>{{ $post['topic'] }}</td>
                  <td>{{ $post['author'] }}</td>
                  <td>{{ $post['description'] }}</td>

                  <td>
                    <a href="{{route('posts.show', $post['id'] )}}" class="btn btn-info">Detail</a>
                  </td>
                  <td>
                    <a href="{{route('posts.edit', $post['id'] )}}" class="btn btn-warning">Edit</a>

                  </td>
                  <td>
                    <form action="{{ route('posts.destroy', $post['id'] )}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Cancella elemento</button>
                    </form>
                  </td>
                 
                </tr>
            @endforeach        
        </tbody>
    </table>
@endsection
   
