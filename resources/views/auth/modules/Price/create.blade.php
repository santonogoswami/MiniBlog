<!DOCTYPE html>
<html>
<body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">
        <h2>----</h2>
        <form action="{{url('auth/modules/Price/store')}}" method="post" enctype="multipart/form-data">
            @csrf

          <div class="form-group">
            <label for="serviceName">serviceName</label>
            <input type="text" class="form-control" id="serviceName" placeholder="serviceName" name="serviceName">
            @if ($errors->has('serviceName'))
            <span class="error">{{ $errors->first('serviceName') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="serviceIcon">serviceIcon</label>
            <input type="file" class="form-control" id="serviceIcon" placeholder="serviceIcon" name="serviceIcon">
            @if ($errors->has('serviceIcon'))
            <span class="error">{{ $errors->first('serviceIcon') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="basic">basic</label>
            <input type="text" class="form-control" id="basic" placeholder="basic" name="basic">
            @if ($errors->has('basic'))
            <span class="error">{{ $errors->first('basic') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="basicPrice">basicPrice</label>
            <input type="text" class="form-control" id="basicPrice" placeholder="basicPrice" name="basicPrice">
            @if ($errors->has('basicPrice'))
            <span class="error">{{ $errors->first('basicPrice') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="simple">simple</label>
            <input type="text" class="form-control" id="simple" placeholder="simple" name="simple">
            @if ($errors->has('simple'))
            <span class="error">{{ $errors->first('simple') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="simplePrice">simplePrice</label>
            <input type="text" class="form-control" id="simplePrice" placeholder="simplePrice" name="simplePrice">
            @if ($errors->has('simplePrice'))
            <span class="error">{{ $errors->first('simplePrice') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="medium">medium</label>
            <input type="text" class="form-control" id="medium" placeholder="medium" name="medium">
            @if ($errors->has('medium'))
            <span class="error">{{ $errors->first('medium') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="mediumPrice">mediumPrice</label>
            <input type="text" class="form-control" id="mediumPrice" placeholder="mediumPrice" name="mediumPrice">
            @if ($errors->has('mediumPrice'))
            <span class="error">{{ $errors->first('mediumPrice') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="complex">complex</label>
            <input type="text" class="form-control" id="complex" placeholder="complex" name="complex">
            @if ($errors->has('complex'))
            <span class="error">{{ $errors->first('complex') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="complexPrice">complexPrice</label>
            <input type="text" class="form-control" id="complexPrice" placeholder="complexPrice" name="complexPrice">
            @if ($errors->has('complexPrice'))
            <span class="error">{{ $errors->first('complexPrice') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="superComplex">superComplex</label>
            <input type="text" class="form-control" id="superComplex" placeholder="superComplex" name="superComplex">
            @if ($errors->has('superComplex'))
            <span class="error">{{ $errors->first('superComplex') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="superComplexPrice">superComplexPrice</label>
            <input type="text" class="form-control" id="superComplexPrice" placeholder="superComplexPrice" name="superComplexPrice">
            @if ($errors->has('superComplexPrice'))
            <span class="error">{{ $errors->first('superComplexPrice') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="multiComplex">multiComplex</label>
            <input type="text" class="form-control" id="multiComplex" placeholder="multiComplex" name="multiComplex">
            @if ($errors->has('multiComplex'))
            <span class="error">{{ $errors->first('multiComplex') }}</span>
        @endif
          </div>
          <div class="form-group">
            <label for="multiComplexPrice">multiComplexPrice</label>
            <input type="text" class="form-control" id="multiComplexPrice" placeholder="multiComplexPrice" name="multiComplexPrice">
            @if ($errors->has('multiComplexPrice'))
            <span class="error">{{ $errors->first('multiComplexPrice') }}</span>
        @endif
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
</body>
</html>
