<nav id="nav">
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Categories <span class="caret"></span></a>
            <ul class="dropdown-menu">
                @foreach ($cats as $cat )
                <li><a href="{{route('cat.show',$cat->id)}}">{{$cat->name}}</a></li>
                @endforeach



            </ul>
        </li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li><a href="login.html">Sign In</a></li>
        <li><a href="register.html">Sign Up</a></li>
    </ul>
</nav>