@extends('layouts.client_template')
@section('content')

  <!-- Content Wrapper. Contains page content -->

  <div class="container" style="margin-left:5%; margin-top:0%;">
  	<div class="row">

  	    <div class="col-md-8 col-md-offset-2">

      		<h1>Create post</h1>

          <form action="{{url('store/post')}}" method="post">
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
                <label for="title">Job Details<span class="require"></span></label>
                <input type="text" class="form-control" name="details" />
      		    </div>

              <div class="form-group">
                 <label for="duration">Duration</label>
                 <p><input type="text" name="duration" ></p>
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
