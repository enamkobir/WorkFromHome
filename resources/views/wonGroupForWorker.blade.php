@extends('layouts.worker_template')
@section('content')
<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">
<<<<<<< HEAD
        <h1>My Group Works</h1>
=======
        <h1>My Group Members</h1>
>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720

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
<<<<<<< HEAD
              <a href="{{url('/removeGroupMember'.$row->id)}}" class="btn btn-sm btn-danger">Ungroup</a>
=======
              <a href="{{url('/removeGroupRequest'.$row->id)}}" class="btn btn-sm btn-danger">Ungroup</a>
>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720
              </p>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>

@endsection
