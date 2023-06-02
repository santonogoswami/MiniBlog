
@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')
<div class="container mt-6">
       
       
            <div class="card card-primary">
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('auth/modules/category/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">

            <div class="form-group">
              <label for="name">name</label>
              <input type="text" class="form-control" id="name" placeholder="name" name="name">
              @if ($errors->has('name'))
              <span class="error">{{ $errors->first('name') }}</span>
          @endif
            </div>


              <div class="form-group">
                <label for="slug">slug</label>
                <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
                @if ($errors->has('slug'))
                <span class="error">{{ $errors->first('slug') }}</span>
            @endif
              </div>

              <div class="form-group">
                <label for="serial">serial</label>
                <input type="number" class="form-control" id="serial" placeholder="serial" name="serial">
                @if ($errors->has('serial'))
                <span class="error">{{ $errors->first('serial') }}</span>
            @endif
              </div>

              <div class="form-group">
                <label for="status">status</label>
                <input type="text" class="form-control" id="status" placeholder="status" name="status">
                @if ($errors->has('status'))
                <span class="error">{{ $errors->first('status') }}</span>
            @endif
              </div> 
            </div>
              <!-- /.card-body -->
          
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      @endsection
      
      