@extends('layout.master')
@section('content')
	<div class="row">
		<div class="col-5 m-auto">
			<h2>Create Post</h2>
			<form action="create" class="was-validated" method="post">
				@csrf
			    <div class="form-group">
			      <label for="Write Something">Write Something:</label>
			      <input type="text" class="form-control" id="Write Something" placeholder="Enter username" name="Write Something" required>
			      <div class="valid-feedback">Valid.</div>
			      <div class="invalid-feedback">Please fill out this field.</div>
			    </div>
			    {{-- <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			      <div class="valid-feedback">Valid.</div>
			      <div class="invalid-feedback">Please fill out this field.</div>
			    </div>
			    <div class="form-group form-check">
			      <label class="form-check-label">
			        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
			        <div class="valid-feedback">Valid.</div>
			        <div class="invalid-feedback">Check this checkbox to continue.</div>
			      </label>
			    </div> --}}
			    <button type="submit" class="btn btn-primary">Submit</button>
			 </form>
		 </div>
	 </div>	
@endsection