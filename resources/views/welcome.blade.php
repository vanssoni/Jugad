@extends('layout.master')
@section('content')
<h3 class="text-center">Welcome To News Feed</h3>
@foreach($posts as $post)
<div class="row w-50  m-auto">
	<div class="card  mb-5"  >
	  <img class="card-img-top" src="{{env('APP_URL').'/uploads/img/'.$post->attachment}}" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">{{$post->uid}} is {{$post->post_type}}</h5>
	    <p class="card-text">{{$post->post_content}}</p>
	    <a href="#" class="btn btn-primary">Go somewhere</a>
	  </div>
</div>
</div>
@endforeach
@endsection