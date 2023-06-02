

@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')



  <div class="container mt-6">



 <div class="card">
    <div class="card-header">
        <a href="{{url('auth/modules/MyWork/create')}}" class="btn btn-primary"> Add Work</a>
      
    </div>


    <div class="card">
        <div class="card-header">
        
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Before Image</th>
                    <th>After Image</th>
                    <th>Image Caption</th>
                    <th>Image Description</th>
                    <th>Edit </th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                 <tr>
                    <td>{{$d->id}}</td>

                    <td><img src="{{asset($d->before_image)}}" alt="" width="100px" height="100px"></td>
                    <td><img src="{{asset($d->after_image)}}" alt="" width="100px" height="100px"></td>
                    <td>{{$d->image_caption}}</td>
                    <td>{{$d->image_description}}</td>
         
                    <td>
                        <a href="{{ route('auth.modules.MyWork.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a></td>
                        <td>    <a href="{{ route('auth.modules.MyWork.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
                    </td>
         
                 </tr>
                 @endforeach
             </tbody>
          
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->




@endsection