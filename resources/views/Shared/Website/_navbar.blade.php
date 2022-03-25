<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img width="45px" src="{{url('Home/images')}}/icon.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu" style="font-size:30px;">
                    <li class="menu-active" ><a href="index.html" style="font-size:16px;">Home</a></li>
                    <li><a href="{{url('Website/assets/pages/about-us.html')}} " style="font-size:16px;">About Us</a></li>
                    <li><a href="{{url('Website/assets/pages/contact.htm')}}l" style="font-size:16px;">Contact</a></li>
                    <li class="menu-has-children"><a href="#" style="font-size:16px;">Categories</a>
                        <ul>
                            <li><a href="{{url('Website/assets/pages/elements.html')}}">elements</a></li>
                            <li><a href="{{url('Website/assets/pages/search.html')}}">search</a></li>
                            <li><a href="{{url('Website/assets/pages/single.html')}}">single</a></li>
                        </ul>
                    </li>
                    @if (Route::has('login'))
                            @auth
                            <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
                            @else
                            <li> <button class="btn btn-primary"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></button></li>

                                @if (Route::has('register'))
                                <li> <button class="btn btn-primary"> <a href="{{ route('register') }}" class=" text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button></li>
                                @endif
                            @endauth
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
