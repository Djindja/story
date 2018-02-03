<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Story | Submission</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url("css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{url("css/main.css")}}" rel="stylesheet" type="text/css">

    @yield('head')
  </head>

  <body>
      <button class="btn-success"><a class="publish" href="/job/publish/{{Request::get('id')}}">Publish</a></button>

      <button class="btn-danger"><a class="spam" href="/job/spam/{{Request::get('id')}}">Spam</a></button>

  </body>
</html>
