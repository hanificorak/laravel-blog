<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="{{ $siteconfig->title }}">
      <meta name="description" content="{{ $siteconfig->description }}">
      <meta name="keywords" content="{{ $siteconfig->keywords }}">
      <title>{{ $siteconfig->title }} - {{ $pagetitle }}</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <link rel="stylesheet" href="/css/app.css">
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130678178-9"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
      
        gtag('config', 'UA-130678178-9');
      </script>

</head>