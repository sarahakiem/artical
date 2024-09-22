<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Login/Registeration') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assests/css/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/styles.css') }}">
</head>

<body class="registeration-wrapper" style="background-image: linear-gradient(rgba(255, 255, 255, 0.735), rgba(0, 0, 0, 0.5))">
    <div class="container my-5 bg-white rounded-3">
        <div class="row">
            <div class="col-md-5 d-none d-md-block img-wrapper">
                <img src="{{ asset('assests/images/rear-view-young-college-student.jpg') }}" alt="">
            </div>