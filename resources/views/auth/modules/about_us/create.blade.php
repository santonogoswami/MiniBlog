
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
        <form action="{{url('auth/modules/about_us/store')}}" method="post" enctype="multipart/form-data">
            @csrf

           


              <div class="form-group">
                <label for="aboutus_description">aboutus_description</label>
                <input type="text" class="form-control" id="aboutus_description" placeholder="aboutus_description" name="aboutus_description">
                @if ($errors->has('aboutus_description'))
                <span class="error">{{ $errors->first('aboutus_description') }}</span>
            @endif
              </div>

              


              <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
</body>
</html>
