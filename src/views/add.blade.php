<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Vimeo Video</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Add Vimeo Video</h1>
    @if ($errors->any())
    <ul class="alert alert-danger">
    @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>
    @endif
    @if(Session::has('error_msg'))
        <p class="alert alert-danger">{{ Session::get('error_msg') }}</p>
    @endif
    <form action="{{ route('addvideo') }}" method="post">
        @csrf
        <input class="form-control input-sm" type="text" name="vimeo_url" placeholder="Vimeo Video Url like (https://vimeo.com/10679287)" maxlength="200">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
