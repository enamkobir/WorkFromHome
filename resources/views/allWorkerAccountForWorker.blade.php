@extends('layouts.worker_template')
@section('content')

<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">
        <h1>All Worker Accounts</h1>

        <table class="table table-responsive">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
          @foreach($data as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>
               <?php

               $check= DB::table('groups')
                    ->where('user_requested','=',$row->id)
                    ->where('requester','=', Auth::user()->id)
                    ->first();

                if($check==''){
               ?>
                <p>
                <a href="{{url('/sendGroupRequest/'.$row->id)}}" class="btn btn-sm btn-primary" style="float:right;">Send Group Request</a>
                </p>
              <?php  } else{?>
                <p>Request Already Sent</p>
              <?php }?>

            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>

@endsection
