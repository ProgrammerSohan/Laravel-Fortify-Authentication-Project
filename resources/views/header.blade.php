    @auth
    Hi, {{Auth::user()->name}}
    <br>
    @endauth

<a href="{{url('/')}}">Home</a> . <a href="{{url('/profile')}}">Profile</a> . <a href="{{url('/login')}}">Login</a> . <a href="{{url('/signup')}}">Signup</a> . <a href="{{url('/logout')}}">Logout</a>
