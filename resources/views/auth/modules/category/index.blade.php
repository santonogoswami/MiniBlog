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
<body>

    <div class="container">


 <a href="{{url('auth/modules/category/create')}}"> Add Category</a>
 <br>
 <table class="table table-responsive">
   <thead>
       <tr>
           <th>id</th>
           <th>name </th>
           <th>slug</th>
           <th>serial </th>
           <th>status</th>
       </tr>
   </thead>

   <tbody>
       @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->slug}}</td>
            <td>{{$d->serial}}</td>
            <td>{{$d->status}}</td>

           <td>
            <a href="{{ route('auth.modules.category.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a></td>
            <td>    <a href="{{ route('auth.modules.category.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
        </td>

        </tr>
        @endforeach
    </tbody>
 </table>
    </div>


</body>
</html> -->
@extends('layouts.master')

@section('content')
<div class="container">


<a href="{{url('auth/modules/category/create')}}"> Add Category</a>
<br>
<table class="table table-responsive">
  <thead>
      <tr>
          <th>id</th>
          <th>name </th>
          <th>slug</th>
          <th>serial </th>
          <th>status</th>
      </tr>
  </thead>

  <tbody>
      @foreach ($data as $d)
       <tr>
           <td>{{$d->id}}</td>
           <td>{{$d->name}}</td>
           <td>{{$d->slug}}</td>
           <td>{{$d->serial}}</td>
           <td>{{$d->status}}</td>

          <td>
           <a href="{{ route('auth.modules.category.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a></td>
           <td>    <a href="{{ route('auth.modules.category.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
       </td>

       </tr>
       @endforeach
   </tbody>
</table>
   </div>
@endsection