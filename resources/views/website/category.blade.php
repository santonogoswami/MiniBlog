
@extends('layouts.website')
@section('content')
<div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach ($ctg as $d  )
        <div class="col-md-6">
          <span>Category</span>
          <h3>{{$d->name}}</h3>
          <p>{{$d->slug}}</p>
          <p>{{$d->serial}}</p>
          <p>{{$d->status}}</p>
        </div>
        @endforeach
       
      </div>
    </div>
  </div>

  



@endsection


