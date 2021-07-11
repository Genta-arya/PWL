
@extends('main')

@section('title','Dashboard-Sign In') 
@section('wrapper')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Sign in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
        <br><br>
      <img class="mb-4" src="{{asset('assets/dist/img/udinus.png')}}" alt="" width="200" >
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      </div>
    <a href="{{url('home')}}" button class="btn btn-lg btn-primary btn-block" type="submit" >Masuk</button></a>
      <p class="mt-5 mb-3 text-muted">&copy; 2014-2021</p>
    </form>
  </body>
</html>

