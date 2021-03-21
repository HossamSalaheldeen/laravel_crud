@extends('layouts.app')

@section('title')Index Page @endsection

@section('content')


<a href="{{route('posts.create')}}" class="btn btn-success" style="margin-bottom: 20px;">Create Post</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Posted By</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    {{-- @dd($post) --}}
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->title ? $post->title : 'title not found'}}</td>
        <td>{{$post->user ? $post->user->name : 'user not found'}}</td>
        <td>{{$post->created_at->format('Y-m-d')}}</td>
        <td>
         
          <x-button type="info" href="{{ route('posts.show',['post' => $post->id]) }}">View</x-button>
          <x-button type="secondary" href="{{ route('posts.edit',['post' => $post->id]) }}">Edit</x-button>
           <form style="display:inline !important" method="POST"  action="{{route('posts.destroy', ['post' => $post->id])}}">
            @csrf
            @method('DELETE')
            <button style="display:inline !important; margin-top:-20px !important" class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
</table>
{{$posts->links("pagination::bootstrap-4")}}
@endsection