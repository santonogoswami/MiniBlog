
@extends('layouts.master')

@section('admin-title')
	Home - page 
@endsection

@section('admin-content')
<div class="container mt-6">
       
       
            <div class="card card-primary">
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{url('auth/modules/About/update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">

                    
            <div class="form-group">
                <label for="contents">contents</label>
                <input type="text" class="form-control" id="contents" value="{{$data->status}}" placeholder="contents" name="contents">
                @if ($errors->has('contents'))
                <span class="error">{{ $errors->first('contents') }}</span>
            @endif
          </div>

            <div class="form-group">
              <label for="image">image</label>
              <input type="file" class="form-control" id="image" placeholder="image" name="image">
              @if ($errors->has('image'))
              <span class="error">{{ $errors->first('image') }}</span>
          @endif
            </div>

              <div class="form-group">
                <label for="status">status</label>
                <input type="number" class="form-control" id="status"  value="{{$data->status}}"placeholder="status" name="status">
                @if ($errors->has('status'))
                <span class="error">{{ $errors->first('status') }}</span>
            @endif
              </div>

            
            <!-- /.card-body -->
        
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
@endsection

