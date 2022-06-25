<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="padding: 0px;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo1.png')}}" alt="" class="img-responsive logo" style="max-width: 50px; padding: 5px 0px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('about.index') }}">About</a>
                        <a class="dropdown-item" href="{{ route('departments.index') }}">Departments</a>
                        <a class="dropdown-item" href="{{ route('clubs.index') }}">Clubs</a>
                        <a class="dropdown-item" href="{{ route('volunteers.index') }}">Volunteers</a>
                        <a class="dropdown-item" href="{{ route('search.index') }}">Users</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career & Networking</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('career_advice.index') }}">Career Advice</a>
                        <a class="dropdown-item" href="{{ route('study_abroad.index') }}">Study Abroad</a>
                        <a class="dropdown-item" href="{{ route('general_advice.index') }}">General Advice</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs & Events</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('upcomming_events.index') }}">Upcoming Events</a>
                        <a class="dropdown-item" href="{{ route('successfull_events.index') }}">Successful Events</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stories</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('success_stories.index') }}">Success Stories</a>
                        <a class="dropdown-item" href="{{ route('career_expert.index') }}">Career Expert</a>
                    </div>
                </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(isset(Auth::user()->avatar))
                        <img src="{{ asset('user_files/'.Auth::user()->avatar) }}" style="max-width: 30px; min-width:30px; min-height:30px; max-height:30px; border-radius: 50%; border:1px solid #ccc;">
                    @else
                        <img src="{{ asset('images/graduatation.png') }}" style="max-width: 30px; min-width:30px; min-height:30px; max-height:30px; border-radius: 50%; border:1px solid #ccc; padding:1px;">
                    @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user_profile.index') }}" >{{ Auth::user()->first_name }} Profile</a>
                        <a class="dropdown-item" href="{{ route('message.index') }}">your Messages</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i style="margin-left:5px;" class="fas fa-sign-out-alt"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </div>
                </li>  
            @endguest
            </ul>
            <form action="{{ route('search') }}" method="POST" class="form-inline my-2 my-lg-0">
                @csrf
                <input class="form-control mr-sm-2 input-sm" type="search" name="search" placeholder="Search" aria-label="Search" required>
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
            </form>
        </div>
    </div>
</nav>