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
               <p><b>Client Name:</b> {{$row->name}}
               <button href="" class="btn btn-sm btn-success" style="float:right;">Request Accept</button>
               <button href="" class="btn btn-sm btn-primary" style="float:right;">Send Request</button>
               <b style="float:right;">Work Duration:  {{$row->duration}} </b>
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
