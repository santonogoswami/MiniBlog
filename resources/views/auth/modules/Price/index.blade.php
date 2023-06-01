

<!DOCTYPE html>
<html>
<head>

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

<h2>HTML Table</h2>

 <a href="{{url('auth/modules/Price/create')}}"> Add Slider</a>
 <br>
 <table class="table table-responsive">
   <thead>
       <tr>
           <th>id</th>
           <th>serviceName</th>
           <th>serviceIcon</th>
           <th>basic</th>
           <th>basicPrice </th>
           <th>simple</th>
           <th>simplePrice</th>
           <th>medium</th>
           <th>mediumPrice</th>
           <th>complex</th>
           <th>complexPrice</th>
           <th>superComplex</th>
           <th>superComplexPrice</th>
           <th>multiComplex</th>
           <th>multiComplexPrice</th>
           <th>edit </th>
           <th>delete</th>
       </tr>
   </thead>

   <tbody>
       @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->serviceName}}</td>
            <td><img src="{{asset($d->serviceIcon)}}" alt="" width="100px" height="100px"></td>
            <td>{{$d->basic}}</td>
            <td>{{$d->basicPrice}}</td>
            <td>{{$d->simple}}</td>
            <td>{{$d->simplePrice}}</td>
            <td>{{$d->medium}}</td>
            <td>{{$d->mediumPrice}}</td>
            <td>{{$d->complex}}</td>
            <td>{{$d->complexPrice}}</td>
            <td>{{$d->superComplex}}</td>
            <td>{{$d->superComplexPrice}}</td>
            <td>{{$d->multiComplex}}</td>
            <td>{{$d->multiComplexPrice}}</td>
           <td>
               <a href="{{ route('auth.modules.Price.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a>
           </td> <td>
               <a href="{{ route('auth.modules.Price.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
           </td>

        </tr>
        @endforeach
    </tbody>
 </table>

</body>
</html>
