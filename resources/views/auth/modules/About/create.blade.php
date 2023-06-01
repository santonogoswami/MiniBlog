
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
        <form action="{{url('auth/modules/About/store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="contents">contents</label>
                <input type="text" class="form-control" id="contents" placeholder="contents" name="contents">
                @if ($errors->has('contents'))
                <span class="error">{{ $errors->first('contents') }}</span>
            @endif


              <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" id="image" placeholder="image" name="image">
                @if ($errors->has('image'))
                <span class="error">{{ $errors->first('image') }}</span>
            @endif
              </div>

              <div class="form-group">
                <label for="status">status</label>
                <input type="number" class="form-control" id="status" placeholder="status" name="status">
                @if ($errors->has('status'))
                <span class="error">{{ $errors->first('status') }}</span>
            @endif
              </div>


              <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
</body>
</html>
