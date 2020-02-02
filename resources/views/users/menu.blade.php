<header>
        <h1 class="logo">Mock<span>Test</span></h1>
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="{{route('home')}}"><i class="fa fa-home nav-icon"></i>Home</a>
                </li>
                <li>
                    <a href="{{route('profile',['user'=>Auth::id()])}}"><i class="fa fa-user nav-icon"></i>Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sort-numeric-up nav-icon"></i>Leaderboards</a>
                </li>
                <li>
                    <a href="#" onclick="logout()"><i class="fa fa-sign-out-alt nav-icon"></i>Log out</a>
                    <form action="{{route('logout')}}" method="post" id="logout">@csrf</form>
                </li>
            </ul>
        </nav>
</header>

