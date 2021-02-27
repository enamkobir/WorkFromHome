@extends('layouts.worker_template')
@section('content')

<div class="container">
	<div class="row">

	    <div class="col-md-8 col-md-offset-2">

    		<h2>Submit Work to Client</h2>

    		<form action="{{url('store/submitClientWork')}}" method="post">
           @csrf
    		    <div class="form-group">
    		        <label for="name">Name<span class="require"></span></label>
    		        <input type="text" class="form-control" name="name" />
    		    </div>

            <div class="form-group">
               <label for="name">Client Name<span class="require"></span></label>
               <input type="text" class="form-control" name="client_name" />
           </div>

           <div class="form-group">
              <label for="work">Work</label>
               <p><input type="file" name="work" ></p>
           </div>

    		    <div class="form-group">
							<label for="title">Description<span class="require"></span></label>
							<input type="text" class="form-control" name="description" />
    		    </div>

    		    <div class="form-group">
    		        <button type="submit" href="/submitClientWork" class="btn btn-primary">
    		            Submit
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>

    		</form>
		</div>

	</div>
</div>
@endsection
