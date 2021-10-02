@extends('layout.master')
@section('content')
	<div class="row">
		<div class="col-5 m-auto">
			@if(session('status'))
				<div class="alert alert-success alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Success!</strong> Indicates a successful or positive action.
				</div>
			@endif
			<h2>Create Post</h2>
			<form action="create"  method="post" enctype="multipart/form-data">
				@csrf
			    <div class="form-group">
				  <label for="post_content">Write Something</label>
				  <textarea class="form-control" id="post_type" name="post_content" rows="3" required=""></textarea>
				</div>
				<div class="form-group">
			      <label for="sel1">Choose Post Type:</label>
			      <select class="form-control" id="sel1" name="post_type" required="">
			        <option value="1">General Post</option>
			        <option value="2">Looking For Team</option>
			        <option value="3">Selling An Project</option>
			        <option value="4">Looking For Project</option>
			        <option value="5">Looking For Project To Work On</option>
			      </select>
			     </div>
			    <div class="form-group">
				    <div class="input-group">
					  	<div class="input-group-prepend">
					   		<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
					  	</div>
					  	<div class="custom-file">
					    	<input type="file" class="custom-file-input" id="file"
					      aria-describedby="inputGroupFileAddon01" name="attachment[]" data-show-upload="true" data-show-caption="true" multiple>
					   		<label class="custom-file-label" for="file">Choose One  Or Multiple files</label>
					 	</div>
					</div>
				</div>
				<input type="hidden" name="uid" value="1">
			    <button type="submit" class="btn btn-primary">Submit</button>
			 </form>
		 </div>
	 </div>	
@endsection