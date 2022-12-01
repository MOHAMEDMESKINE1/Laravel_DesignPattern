<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7974ce4497.js" crossorigin="anonymous"></script>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
     
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

     <!-- bootstrap css -->
     {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
     <!-- font awesome -->
     {{-- <link rel="stylesheet" href="resources/css/all.min.css"> --}}
</head>
<body class="bg-light">
    @include('layouts.navbar')    
    <div>
        @yield('content')
    </div>








    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- bs js -->
    {{-- <script src="resources/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}"> --}}

    <!-- fontawseome js -->
    {{-- <script src="resources/js/all.min.js"></script> --}}
</body>
</html>