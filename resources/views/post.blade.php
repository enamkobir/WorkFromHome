@extends('layouts.client_template')
@section('content')


  <!-- Content Wrapper. Contains page content -->

  <div class="container" style="margin-left:5%; margin-top:2%;">
  	<div class="row">

  	    <div class="col-md-8 col-md-offset-2">

      		<h1>Create post</h1>

          <form action="{{route('store.post')}}" method="post">
            @csrf

      		    <div class="form-group has-error">
      		        <label for="slug">Name<span class="require"></span></label>
      		        <input type="text" class="form-control" name="name" />

      		    </div>

      		    <div class="form-group">
      		        <label for="title">Email<span class="require"></span></label>
      		        <input type="text" class="form-control" name="email" />
      		    </div>

      		    <div class="form-group">
      		        <label for="description">Job Details</label>
      		        <textarea rows="5" class="form-control" name="details" ></textarea>
      		    </div>

      		    <div class="form-group">
      		        <p><input type="file" name="file" ></p>
      		    </div>

      		    <div class="form-group">
      		        <button type="submit" href="/post" class="btn btn-primary">
      		            Create
      		        </button>
      		        <button class="btn btn-default">
      		            Cancel
      		        </button>
      		    </div>

      		</form>
  		</div>

  	</div>
  </div>

  <!-- /.content-wrapper -->
  @endsection
