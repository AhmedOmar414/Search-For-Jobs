<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Job Listing</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{url('Website/assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('Website/assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('Home')}}/home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="box-shadow: 0 3px 4px -2px rgba(0,0,0,.2);">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="Home/images/icon.png" alt="icon" width="40px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="#navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto pl-4">
                    <li class="nav-item active ">
                        <a class="p nav-link" href="#">EXPLORE</a>
                    </li>
                    <li class="nav-item pl-2">
                        <a class="p nav-link" href="#">SAVED</a>
                    </li>
                    <li class="nav-item pl-2">
                        <a class="p nav-link" href="#">APPLICATIONS</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="search for jobs"/>
                        </div>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="pl-4">
                <a href="#"><img class="rounded-circle" width="35px" alt="100x100" src="Home/images/t3.png" data-holder-rendered="true"></a>
            </div>
        </div>
    </nav>
<div class="container">
    @yield('content')
</div>
</body>

</html>
