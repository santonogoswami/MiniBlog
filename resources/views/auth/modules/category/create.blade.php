
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="{{url('auth/modules/category/store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
                @if ($errors->has('name'))
                <span class="error">{{ $errors->first('name') }}</span>
            @endif


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



              <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
</body>
</html>
