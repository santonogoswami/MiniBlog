




@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')



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
