@extends('layouts.worker_template')
@section('content')
<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">
        <h1>My Group Works</h1>

        <table class="table table-responsive">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Work</th>
            <th>Action</th>
          </tr>
          @foreach($data as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>
              <form action="" method="post">
               @csrf
               <p><input type="file" name="file" ><button type="submit" href="" class="btn btn-sm btn-primary">Send</button></p>
              </form>
            </td>
            <td>
              <p>
              <a href="{{url('/removeGroupMember'.$row->id)}}" class="btn btn-sm btn-danger">Ungroup</a>
              </p>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>

@endsection
