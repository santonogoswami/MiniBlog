


@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')



  <div class="container mt-6">


 <a href="{{url('auth/modules/About/create')}}" class="btn btn-primary"> Add About</a>
 <br>
 <table class="table table-responsive">
   <thead>
       <tr>
           <th>id</th>
           <th>contents</th>
           <th>image </th>
           <th>status</th>
           <th>edit </th>
           <th>delete</th>
       </tr>
   </thead>

   <tbody>
       @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->contents}}</td>
            <td><img src="{{asset($d->image)}}" alt="" width="100px" height="100px"></td>
            <td>{{$d->status}}</td>

           <td>
               <a href="{{ route('auth.modules.About.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a></td>
               <td>    <a href="{{ route('auth.modules.About.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
           </td>

        </tr>
        @endforeach
    </tbody>
 </table>
    </div>



@endsection
