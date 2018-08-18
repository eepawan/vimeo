<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vimeo Listing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style style="">
        .listing-grid{
            background-color: bisque;
            margin-top: 10px;
            margin-right: 10px;
            padding: 10px;

        }
        .
    </style>
</head>
<body>

<div class="container">
    <a href="/vimeo/add">Add Video</a>
    <h1>Vimeo Listing</h1>
    <div class="row">
        @foreach ($videos as $video)
            <div class="col-sm-3 listing-grid">
                <p><img src="{{$video->thumbnail}}" width="250" height="250"></p>
                <p><a href="#" class="vimeo_video" data-url="{{ $video->vimeo_url }}" data-title="{{ $video->title }}" data-toggle="modal" data-target="#myModal"> {{ $video->title }}</a></p>
            </div>

        @endforeach
    </div>
    {{ $videos->links() }}
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <iframe id="vimeo_iframe" src="" width="540" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

</body>
<script src="{{ asset('vendor/vimeo/js/vimeo.js') }}"></script>
</html>