<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <script src="{{mix('/js/app.js')}}"></script>
    <title>DC COMICS - @yield('title')</title>
</head>  
<body>
    
      <header>
          @include('templates.header')
      </header>

        <main>
             @yield('main')
        </main>

      <footer>
          @include('templates.footer')
      </footer>


      