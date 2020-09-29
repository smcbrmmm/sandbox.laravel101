<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ \Route::currentRouteName() === 'pages.index' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('pages.index') }}">All Pages</a>
            </li>
            <li class="nav-item {{ \Route::currentRouteName() === 'posts.index' ? 'active' : ''}} ">
                <a class="nav-link" href="{{ route('posts.index') }}">รายการโพสต์ทั้งหมด</a>
            </li>
        </ul>
    </div>
</nav>
