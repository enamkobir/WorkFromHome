@extends('layouts.worker_template')
@section('content')


</style>
<body>
<div class="container" style=" margin-top:2%; margin-left:2%">
  <div class="row">
      <div class="col-md-11 col-md-offset-4">
        <h1>All post</h1>
          <div>
          @foreach($data as $row)
          <table class="table table-responsive">
            <tr>
              <th>
               <p><b>Client Name:</b> {{$row->name}} </p>
                <p>  <b style>Work Duration:  {{$row->duration}} </b>
                 <?php

                 $check= DB::table('work_request')
                      ->where('user_requested','=',$row->id)
                      ->where('requester','=', Auth::user()->id)
                      ->first();

                  if($check==''){
                 ?>
               <a href="{{url('/sendWorkRequest/'.$row->id)}}" class="btn btn-sm btn-primary" style="float:right;">Send Request</a>
             <?php  } else{?>
               <a style="float:right;">Already Sent</a>
             <?php }?>
             </p>
              </th>
            </tr>
          <td>
            <p><b>Job Details:</b> {{$row->details}}  </p>
          </td>
          @endforeach
         <div>
    </div>
  </div>
</div>
</body>


@endsection
