 <!-- header section -->
 <nav class="navbar navbar-expand-lg">
     <div class="container">
         <a class="navbar-brand d-flex align-items-center logo-link" href="/">
         </a>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-lg-auto">
                 <li class="nav-item">
                     <a class="nav-link click-scroll active" href="{{ route('home') }}">Home</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link click-scroll" href="{{ route('how-to-play') }}">Playing Guide</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link click-scroll" href="{{ route('leagues') }}">Play Now
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link click-scroll" href="{{ route('about-us') }}">About </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link click-scroll" href="{{ route('contact-us') }}">Contact</a>
                 </li>
             </ul>
             @if(!Auth::check())
             <div>
                 <ul class="header_right">
                     <li class="nav-item">
                         <a class="nav-link  custom-btn" href="{{ route('login') }}">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link click-scroll custom-btn" href="{{ route('signup') }}">Sign up</a>
                     </li>
                 </ul>
             </div>
             @endif
             @if(Auth::check())

             <div class="profile">
                 <div class="avatar">
                     <div class="avatar-content">
                         <a href="#">
                             <div class="profile-image">
                                 <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/images/user.png') }}" alt="profile">
                             </div>
                             <span>{{ ucfirst(Auth::user()->name) }}</span>
                         </a>
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                             <path
                                 d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                             </path>
                         </svg>
                     </div>
                     <div class="dropdown">
                         <ul>
                             <li>
                                 <a href="{{ route('profile.profile') }}">
                                     <div class="profile-dropdown-options profile-image-dropdown">
                                         <img src="assets/images/user.png">
                                     </div>
                                     My Profile
                                 </a>
                             </li>
                             <li>
                                 <a href="{{route('profile.matches')}}">
                                     <div class="profile-dropdown-options profile-image-stadium"
                                         style="background-image: url(assets/images/stadium.png);">
                                     </div>
                                     My Matches
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ route('logout') }}">
                                     <div class="profile-dropdown-options profile-image-logout"
                                         style="background-image: url(assets/images/shutdown.png);">

                                     </div>
                                     Log Out
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             @endif

         </div>
     </div>
 </nav>
