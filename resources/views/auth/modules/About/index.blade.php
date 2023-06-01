


@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')

<!-- 
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body> -->

    <div class="container">


 <a href="{{url('auth/modules/About/create')}}"> Add About</a>
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
