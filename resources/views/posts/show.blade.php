@extends('layouts.app')

@section('title')Show Page @endsection

@section('content')
<div class="card">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <h5 class="card-title" style="display:inline">Title:-</h5>
      <p class="card-text" style="display:inline">{{ $post['title'] }}</p>
      <br/>
      <h5 class="card-title" style="display:inline">Description:-</h5>
      <p class="card-text" >{{ $post['description'] }}</p>
    </div>
</div>

<div class="card mt-5">
    <div class="card-header">
      Post Creator Info
    </div>
    <div class="card-body">
      <h5 class="card-title" style="display:inline">Name:-</h5>
      <p class="card-text" style="display:inline">{{ $post['posted_by'] }}</p>
      <br/>
      <h5 class="card-title" style="display:inline">Email:-</h5>
      <p class="card-text" style="display:inline">{{ $post['email'] }}</p>
      <br/>
       <h5 class="card-title" style="display:inline">Created at:-</h5>
      <p class="card-text" style="display:inline">{{ $post['created_at'] }}</p>
    </div>
</div>
@endsection