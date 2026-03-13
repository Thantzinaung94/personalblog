<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('header')</title>
    <link rel="icon" href="{{asset('assets/image/thantzinaung.jpg')}}" type="image/jpg" sizes="32x32">
    
    {{-- bootstrap css1, js1 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    {{-- fontawesome cdn css1  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- cuz css --}}
    @yield('styles')
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top mb-5" >
        <div class="container-fluid">
            <div class="navbar-brand"> 
                <img src="{{asset('assets/image/thantzinaung.jpg')}}" width="50" height="50" class="rounded-circle me-2" alt="thantzinaung">
                <span>Thantzinaung</span>
            </div>
            <div>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbartoggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbartoggler">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/posts" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Project</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    @yield('contents')
    
    @include('layouts.footer')

